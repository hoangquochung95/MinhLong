<template>
        <div class="form-login">
            <form>
                <div class="form-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="username" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ghi nhớ mật khẩu</label>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                    <button type="button" class="btn">Thoát</button>
                </div>
            </form>
        </div>
</template>

<script>
    export default {
        name: "login"
    }
</script>

<style scoped>

</style>