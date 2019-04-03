<template>
    <form @submit.prevent="submitForm">
        <div v-if="errorMessage" class="alert alert-danger">
            {{errorMessage}}
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
                Login
            </button>
        </div>

    </form>
</template>
<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            errorMessage: ''
        };
    },
    methods: {
        submitForm() {
            this.$query('login', {
                email: this.email,
                password: this.password
            }).then(res => {
                let token = res.data.data.login;

                if (token) {
                    sessionStorage.setItem('api-token', token);
                    this.$appEvents.$emit('log-on');
                    this.$router.push('/');
                } else {
                    this.errorMessage = 'The email address and/or password is incorrect.';
                }


            });
        }
    }
}
</script>

