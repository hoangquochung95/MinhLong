<template>
    <div class="row view-tab-category">
        <div class="col-md-3">
            <div class="row">
                 <h6><p class="list-title"> Danh mục sản phẩm </p></h6>
            </div>
            <div class="row list-body"  v-for="item in distinctCategory">
                <a :href="'#'+item.id" class="list-context" @click="changeCate(item.id)" :id="'list-parent-'+item.id"  data-toggle="collapse" :data-target="'#list-sub-'+item.id">
                {{ item.value }}</a>
                <div  :id="'list-sub-'+item.id" class="collapse" :data-parent="'#list-parent-'+item.id">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                    Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                    you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3" v-for="item in listImg">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" :src="item.url" alt="Card image cap">
                        <div class="card-body">
                            <div class ="title-item-shop">
                                <p><b>{{ item.name }}</b></p>
                            </div>
                            <div class ="rating-item-shop">
                                <img src="image/star.png" alt="" class="star-rating">
                                <img src="image/star.png" alt="" class="star-rating">
                                <img src="image/star.png" alt="" class="star-rating">
                                <img src="image/star.png" alt="" class="star-rating">
                                <img src="image/star.png" alt="" class="star-rating">
                            </div>
                            <div class ="price-item-shop">
                                <p>{{ item.price }}</p>
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
            props:{
                typeContext: String
            },
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
                    ],
                    context:'',
                    styleCss:{
                        displayTabbar:false,
                        displayCategory:false,
                    },
                    displayImg: '',
                    currentCategory: 1,

                }
            },
            mounted:function () {
              this.context =this.typeContext;
            },
            methods: {
                changeCate: function (categoryId) {
                    this.currentCategory = categoryId;
                    console.log(this.currentCategory);
                }
            },
            computed: {
                listImg: function () {
                    return this.img.map(function (img) {
                        img.url = window.location.origin + '/' + baseUrl + '/' +img.url;
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
            watch: {
                context: function (newQuestion, oldQuestion) {
                    switch (newQuestion){
                        case 'welcome':
                            this.styleCss.displayTabbar=true;
                            this.styleCss.displayCategory=true;
                            break;
                    }
                }
            },
    }
</script>
