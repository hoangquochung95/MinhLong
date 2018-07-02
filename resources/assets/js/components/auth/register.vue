<template>
    <div class="form-register">
        <form>
            <div class="form-group">
                <label for="name">Họ Tên</label>
                <input type="text" class="form-control" id="name" placeholder="Họ Tên">
            </div>
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" class="form-control" id="username" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <label for="repassword">Nhập lại mật khẩu</label>
                <input type="password" class="form-control" id="repassword" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "register",
    }
</script>

<style scoped>

</style>