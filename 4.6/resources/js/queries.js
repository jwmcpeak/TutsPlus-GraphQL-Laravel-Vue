import Vue from 'vue';

Vue.prototype.$apiQueries = {
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
    }`
};