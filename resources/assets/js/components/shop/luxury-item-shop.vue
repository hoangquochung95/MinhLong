<template>
    <div class="row luxury-item-shop">
        <div class="col-md-3" v-for="item in listImg">
            <img class="card-img-top " :src="item.url" alt="Card image cap">
            <hr>
            <div class="luxury-item-body"><img class="card-img-top luxury-item-icons" src="image/diamond.png" alt="Card image cap">
                <p>{{ item.name }}</p>
            </div>
            <hr>
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                img: [
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                    {
                        url: 'image/a.jpeg',
                        name: "Bon cau cao cap",
                        price: "123",
                        categoryName: "Thể Loại 1",
                        categoryId: "1"
                    },
                   
                ],
                displayImg: '',
                currentCategory: 1
            }
        },
        computed: {
            listImg: function () {
                var that=this;
                return this.img.map(function (img) {
                    img.url = window.location.origin + '/' + baseUrl + '/' +img.url;
                    return img;
                })
            },
        },
    }
</script>