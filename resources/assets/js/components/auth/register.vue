<template>
    <div class="form-register">
        <form method="post" action="">
            <div class="alert alert-warning" v-for="items in errorsMsg">
                <template  v-for="item in items">
                    {{item}}
                </template>
            </div>
            <div class="form-group">
                <label for="name">Họ Tên</label>
                <input type="text" class="form-control" id="name" placeholder="Họ Tên" v-model="form.name">
            </div>
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập" v-model="form.username">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" placeholder="Mật khẩu" v-model="form.password">
            </div>
            <div class="form-group">
                <label for="repassword">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="repassword" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" v-model="form.phone">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" v-model="form.email">
            </div>
            <button type="button" class="btn btn-primary" @click.prevent="register">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "register",
        data:function(){
            return{
                form:{},
                errorsMsg:''
            }
        },
        methods:{
            register:function(){
                axios
                    .post('member',this.form)
                    .then(response => ({}))
                    .catch(error => {
                        var errors =error.response.data.errors;
                        console.log(Object.keys(errors).length);
                        if(Object.keys(errors).length > 0){
                            this.errorsMsg=error.response.data.errors;
                        }
                    });
            }
        }
    }
</script>

<style scoped>

</style>