<template>
    <div class="form-row" style="padding-bottom: 15px;">
        <div class="col">
            <label for="">Title</label>
            <input v-model="task.title" type="text" class="form-control">
        </div>
        <div class="col">
            <label for="">Description</label>
            <input v-model="task.description" type="text" class="form-control">
        </div>
        <div class="col">
            <label for="">Assigned To</label>
            <select id="userSelection" class="form-control" v-model="task.userId">
                <option v-for="user in users" 
                    :key="user.id" :value="user.id">{{user.name}}</option>
            </select>
        </div>
        <div class="col">
            <label for="">Status</label>
            <select v-model="task.statusCode" class="form-control">
                <option value="OPEN">Open</option>
                <option value="HOLD">Hold</option>
                <option value="COMP">Complete</option>
            </select>
        </div>
    </div>
</template>
<script>
export default {
    props: ['task', 'users']
}
</script>
