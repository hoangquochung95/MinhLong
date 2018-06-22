<template id="view-tab-category">
    <div class="row view-tab view-tab-category">

        <ul class="nav nav-tabs index-tab-1 ">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <div class="col-md-4">
            <div class="category-list">
                <div class="list-group">
                    <span class="list-group-item"> Danh sách </span>
                    <a :href="'#'+item.id" class="list-group-item list-group-item-action" v-for="item in distinctCategory" @click="changeCate(item.id)">
                        <div class="list-group-left">@{{  item.value }}</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-3" v-for="item in listImg">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" :src="item.url" alt="Card image cap">
                        <div class="card-body">
                            <div class ="title-item-shop">
                                <b>@{{ item.name }}</b>
                            </div>
                            <div class ="price-item-shop">
                                <p>@{{ item.price }}</p>
                            </div>
                            <div class ="rating-item-shop">
                                <img src="{{ URL::asset('image/star.png') }}" alt="" height="30" width="30">
                                <img src="{{ URL::asset('image/star.png') }}" alt="" height="30" width="30">
                                <img src="{{ URL::asset('image/star.png') }}" alt="" height="30" width="30">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        {
                            url: 'image/b.jpeg',
                            name: "Bon cau trung cap",
                            price: "12",
                            categoryName: "Thể Loại 2",
                            categoryId: "2"
                        },
                        {
                            url: 'image/b.jpeg',
                            name: "Bon cau trung cap",
                            price: "12",
                            categoryName: "Thể Loại 2",
                            categoryId: "2"
                        },
                        {
                            url: 'image/b.jpeg',
                            name: "Bon cau trung cap",
                            price: "12",
                            categoryName: "Thể Loại 2",
                            categoryId: "2"
                        },
                        {
                            url: 'image/c.jpeg',
                            name: "Bon cau ha cap",
                            price: "1",
                            categoryName: "Thể Loại 3",
                            categoryId: "3"
                        },
                        {
                            url: 'image/c.jpeg',
                            name: "Bon cau ha cap",
                            price: "1",
                            categoryName: "Thể Loại 3",
                            categoryId: "3"
                        },
                        {
                            url: 'image/c.jpeg',
                            name: "Bon cau ha cap",
                            price: "1",
                            categoryName: "Thể Loại 3",
                            categoryId: "3"
                        },
                    ],
                    displayImg: '',
                    currentCategory: 1
                }
            },
            template: "#view-tab-category",
            methods: {
                changeCate: function (categoryId) {
                    this.currentCategory = categoryId;
                    console.log(this.currentCategory);
                }
            },
            computed: {
                listImg: function () {
                    var that = this;
                    return this.img.map(function (img) {
                        that.url = window.location.origin + '/' + baseUrl + '/' + that.img;
                        return img;
                    })
                },
                distinctCategory: function () {
                    var listCateId = [];
                    for (var index in this.img) {
                        var cateName = this.img[index].categoryName;
                        var cateId = this.img[index].categoryId;
                        if (listCateId.length === 0) {
                            listCateId.push({value: cateName, id: cateId});
                        } else {
                            var checkExistCate = listCateId.find(function (element) {
                                return element.id === cateId;
                            });
                            if (typeof checkExistCate === "undefined")
                                listCateId.push({value: cateName, id: cateId});
                        }
                    }
                    return listCateId;
                }
            },
    }
</script>
