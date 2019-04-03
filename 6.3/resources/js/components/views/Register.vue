<template>
    <form @submit.prevent="submitForm">
        <div v-if="errorMessage" class="alert alert-danger">
            {{errorMessage}}
        </div>
        <div class="form-group">
            <label for="displayName">Display Name</label>
            <input id="displayName" v-model="displayName" 
                class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" v-model="email" 
                class="form-control" type="text">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" v-model="password" 
                class="form-control" type="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>

    </form>
</template>
<script>
export default {
    data() {
        return {
            displayName: '',
            email: '',
            password: '',
            errorMessage: ''
        };
    },
    methods: {
        submitForm() {
            this.$query('register', {
                displayName: this.displayName,
                email: this.email,
                password: this.password
            }).then(res => {
                let token = res.data.data.register;

                if (token) {
                    sessionStorage.setItem('api-token', token);
                    this.$appEvents.$emit('log-on');
                    this.$router.push('/');
                } else {
                    this.errorMessage = 'An error occurred.';
                }


            });
        }
    }
}
</script>

