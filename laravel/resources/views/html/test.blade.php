<div class="col-md-7">
    <div class="sap_tabs">
        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
            <div class="tab_grid">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>全部</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>热门房源</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>增值房源</span></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <!--房源信息循环遍历 -->
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                <ul class="tab_img tab_1">
                    @foreach ($posts as $post)
                        <li>
                            <div class="client_box1">
                                <img src="uploads/{{ $post->origintal_img}}" class="img-responsive" alt="" />

                                <div class="box_type">$&nbsp;{{ $post->pay }}</div>

                                <h3 class="m_1"><a href="javascript:void(0)" onclick="nae({{ $post->ava_id }})">{{ $post->house_title }}</a></h3>
                                <div>
                                    <h5 class="m_1"><strong><span >{{$post->house_type}} &nbsp;{{$post->house_size}} m²</span></strong> </h5>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    <div class="clearfix"></div>
                </ul>
                {!! $posts->render() !!}
            </div>

            <!--  热门房源 -->
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">

                <ul class="tab_img">
                    <li>
                        <div class="client_box1">
                            <img src="images/pic4.jpg" class="img-responsive" alt=""/>
                            <div class="box_type">$&nbsp;650</div>
                            <h3 class="m_1"><a href="single.html">Dolor Sit</a></h3>
                            <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="client_box1">
                            <img src="images/pic5.jpg" class="img-responsive" alt=""/>
                            <div class="box_type">$&nbsp;450</div>
                            <h3 class="m_1"><a href="single.html">Dolor Sit</a></h3>
                            <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                            </div>
                        </div>
                    </li>
                    <li class="last">
                        <div class="client_box1">
                            <img src="images/pic6.jpg" class="img-responsive" alt=""/>
                            <div class="box_type">$&nbsp;500</div>
                            <h3 class="m_1"><a href="single.html">Dolor Sit</a></h3>
                            <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                            </div>
                        </div>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>

            <!--  增值 房源 -->
            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                <ul class="tab_img">
                    <li>
                        <div class="client_box1">
                            <img src="images/pic5.jpg" class="img-responsive" alt=""/>
                            <div class="box_type">$&nbsp;450</div>
                            <h3 class="m_1"><a href="single.html">Dolor Sit</a></h3>
                            <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                            </div>
                        </div>
                    </li>
                    <li class="last">
                        <div class="client_box1">
                            <img src="images/pic6.jpg" class="img-responsive" alt=""/>
                            <div class="box_type">$&nbsp;500</div>
                            <h3 class="m_1"><a href="single.html">Dolor Sit</a></h3>
                            <div class="boxed_mini_details clearfix">
			                                    <span class="area first"><strong>Garage</strong><i class="fa fa-plane icon1"></i>
			                                    2</span>
			                                    <span class="status"><strong>Baths</strong><i class="fa fa-retweet icon1"> </i>
			                                    2</span>
			                                    <span class="bedrooms last"><strong>Beds</strong><i class="fa fa-building-o icon1"></i>
			                                    2</span>
                            </div>
                        </div>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </div>

        </div>
    </div>
</div>