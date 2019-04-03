<template>
    <div class="container">
        <h3>Create Project</h3>
        <form @submit.prevent="submitForm">
            <div class="form-group">
                <label for="title">Project Name</label>
                <input id="title" type="text" class="form-control"
                    v-model="title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input id="description" type="text" class="form-control"
                    v-model="description">
            </div>
            <div class="form-group">
                <label for="userSelection">User</label>
                <select id="userSelection" class="form-control" 
                    v-model="selectedUsers" multiple>
                    <option v-for="user in users" 
                        :key="user.id" :value="user">{{user.name}}</option>
                </select>
            </div>
            <h5>Tasks</h5>
            <div class="form-group">
                <button type="button" class="btn btn-success" 
                    @click.prevent="addTask">Add Task</button>
            </div>

            <task-editor v-for="task in tasks" :task="task" :users="selectedUsers" />
        
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save Project</button>
            </div>
        </form>
    </div>
</template>
<script>
import TaskEditor from './../TaskEditor.vue';
export default {
    components: {TaskEditor},
    data() {
        return {
            title: '',
            description: '',
            users: [],
            selectedUsers: [],
            tasks: []
        };
    },
    methods: {
        submitForm() {

        },
        addTask() {
            this.tasks.push({
                title: '',
                description: '',
                statusCode: 'OPEN',
                userId: 0
            });
        }
    }
}
</script>

