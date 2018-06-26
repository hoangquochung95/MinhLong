<template>
    <div class="row view-tab contact-index">
        <div class="col-md-6 avatar-index" style="width: 50%">
            <img src="image/b.jpeg" alt="Avatar" class="image">
            <div class="avatar-index-body">
                <div class="avatar-index-text">Hello World</div>
            </div>
        </div>
        <div class="col-md-6">
            <form action="">
                <div class="form-group">
                    <label for="name">Họ tên </label> <span class="vee-error-msg">{{ errors.first('name') }}</span>
                    <input type="text" id="name" class="form-control" placeholder="Họ tên" name="name" v-model="form.name" v-validate="'required'">
                </div>
                <div class="form-group">
                    <label for="email">Email </label><span class="vee-error-msg">{{ errors.first('email') }}</span>
                    <input type="text" id="email" class="form-control" placeholder="Email" name="email" v-model="form.email" v-validate="'required'">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại </label><span class="vee-error-msg">{{ errors.first('phone') }}</span>
                    <input type="text" id="phone" class="form-control" placeholder="Số điện thoại" name="phone" v-model="form.phone">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ</label><span class="vee-error-msg">{{ errors.first('address') }}</span>
                    <input type="text" id="address" class="form-control" placeholder="Địa chỉ" name="address" v-model="form.address">
                </div>
                <div class="form-group">
                    <label for="note">Ghi chú</label><span class="vee-error-msg">{{ errors.first('note') }}</span>
                    <textarea type="text" id="note" class="form-control" placeholder="Ghi chú" name="note" v-model="form.note"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-success">active</button>
                    <button class="btn">cancel</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
    require('vee-validate');
    export default {
        data: function () {
            return {
                form:{
                    name:'',
                    email:'',
                    phone:'',
                    address:'',
                    note:'',
                }
            }
        },
    }
</script>