import Vue from 'vue';
import axios from 'axios';

let queries = {
    dashboard: '{projects{id,title,description}}',
    singleProject: `query fetchSingleProject($projectId: Int) {
        projects(projectId: $projectId) {
            id,
            title,
            description,
            tasks {
                id,
                title,
                description,
                statusCode,
                user {
                    name
                }
            }
        }
    }`,
    login: `mutation LoginUser($email: String, $password: String) {
        login(email: $email, password: $password)
    }`
};

let guestQueries = [
    'login'
];

function getApiUrl(queryName) {
    let segment = '';

    if (guestQueries.some(q => q === queryName)) {
        segment = '/guest';
    }

    return `/graphql${segment}`;
}

Vue.prototype.$query = function(queryName, queryVariables) {
    let options = {
        url: getApiUrl(queryName),
        method: 'POST',
        data: {
            query: queries[queryName]
        }
    };

    if (queryVariables) {
        options.data.variables = queryVariables;
    }

    let token = sessionStorage.getItem('api-token');

    if (token) {
        options.headers = {
            Authorization: `Bearer ${token}`
        };
    }


    return axios(options);
};


