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
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-left">Thể Loại n</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                    <a class="list-group-item list-group-item-action" data-toggle="collapse" href="#sub-list-item" aria-expanded="false" aria-controls="collapseExample">
                        <div class="list-group-left">Thể Loại 1</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                    <div class="collapse" id="sub-list-item">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="list-group-left">Thể Loại 2</div>
                            <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                        </a>
                    </div>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-left">Thể Loại 3</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-left">Thể Loại 4</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="list-group-left">Thể Loại 5</div>
                        <div class="list-group-right"><img src="image/add.png" alt="" height="10" ></div>
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
</div>
</template>
<script type="module">
    require(['Vue'],function (Vue) {
        var component =Vue.component('view-tab-category',{
            data:function (){
                return {
                    img:[
                        {url:'image/a.jpeg',name:"Bon cau cao cap",price:"123"},
                        {url:'image/b.jpeg',name:"Bon cau trung cap",price:"12"},
                        {url:'image/c.jpeg',name:"Bon cau ha cap",price:"1"},
                    ],
                    displayImg:''
                }
            },
            template:"#view-tab-category",
            computed:{
                listImg:function () {
                    var that= this;
                    return this.img.map(function (img) {
                        that.url= window.location.origin+'/'+baseUrl+'/'+that.img;
                        return img;
                    })
                }
            }
        });

    })
</script>