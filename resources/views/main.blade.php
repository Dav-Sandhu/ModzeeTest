@extends('layouts.app')


@section('content')

<style>
    body{
        background-image: url('img/landscape6.jpg');
        background-size: cover;
        backdrop-filter: blur(100px);
    }
</style>

<script>
var CSRF_TOKEN = '<?php echo csrf_token() ?>';
    
$.ajax({
    type:'GET',
    url:'landscapes.json',
    data:'_token = <?php echo csrf_token() ?>',
    success:function(data) {
        $("#name").html(data.name);
        $("#phone").html(data.phone);
        $("#email").html(data.email);
        $("#bio").html(data.bio);

        document.getElementById("profile").src = `${data.profile_picture}`;

        for (let i = 0; i < data.album.length; i++){
            $.ajax({
                type:'POST',
                url:'addPost',
                data: {_token: CSRF_TOKEN, id: data.album[i].id, title: data.album[i].title, 
                    description: data.album[i].description, img: data.album[i].img, 
                    date: data.album[i].date, featured: data.album[i].featured},
                success: function(response){}
            });

            document.getElementById("landscape_title".concat((i+1).toString())).innerHTML = `${data.album[i].title}`;
            document.getElementById("landscape_date".concat((i+1).toString())).innerHTML = `${data.album[i].date}`;
            document.getElementById("landscape_description".concat((i+1).toString())).innerHTML = `${data.album[i].description}`;
            document.getElementById("landscape_img".concat((i+1).toString())).src = `${data.album[i].img}`;

            if (data.album[i].featured  == '1'){
                document.getElementById("heart".concat((i+1).toString())).style.visibility = 'visible';
            }
        }

        $.ajax({
            type:'POST',
            url:'addUser',
            data: {_token: CSRF_TOKEN, name: data.name, phone: data.phone, email: data.email, 
                bio: data.bio, profile_picture: data.profile_picture},
            success: function(response){}
        });
    }
});
</script>

</br>
<ul class="list-group">
    <div class="list-group-item">
        <p class="profile_info">
        <img id='profile' class="profile" alt="Profile Picture" width=150 height=150>
        &ensp; 
        <b id = 'name' class="name"></b></br>

        <span class="right_block">
            <b class="sub-heading-right">Phone</b></br>
            <span id = 'phone' class="info"></span> 
            <b class="sub-heading-right">Email</b></br>
            <span id = 'email' class="info"></span>
        </span>
        
        &ensp; 
        <b class="sub-heading">Bio</b></br>
        <span id = 'bio' class="bio"></span>
        </p>
    </div>
</ul>
</br>

<span class="landscape_modules">
    <span class="left_box">
        <span class="landscape_info">
            <span class="box">
                <img id='landscape_img1' class="landscape_img" alt="Landscape Image" width=325 height=200 style="position: absolute;">
                &ensp; <span id='landscape_title1' class="display_text" style="position: relative; bottom: -150px;"></span>
            </span>
            <span id="landscape_description1" class="desc" style="bottom: -10px;"></span>
            <span id="landscape_date1" class="date"></span>
            <span id="heart1" class="heart_box" style="visibility: hidden;">
                <span class="heart" id="heart"></span>
            </span>
        </span>
        </br></br></br></br></br></br></br></br>
        </br></br></br></br></br></br></br></br>
        <span class="landscape_info">
            <span class="box">
                <img id='landscape_img4' class="landscape_img" alt="Landscape Image" width=325 height=200>
                &ensp; <span id='landscape_title4' class="display_text" style="position: relative; bottom: 50px;"></span>
            </span>
            <span id="landscape_description4" class="desc" style="bottom: 30px;"></span>
            <span id="landscape_date4" class="date"></span>
            <span id="heart4" class="heart_box" style="visibility: hidden;">
                <span class="heart" id="heart"></span>
            </span>
        </span>
    </span>

    <span class="right_box">
        <span class="landscape_info" style="margin-left: -325px;">
            <span class="box">
                <img id='landscape_img3' class="landscape_img" alt="Landscape Image" width=325 height=200>
                &ensp; <span id='landscape_title3' class="display_text" style="position: relative; bottom: 50px;"></span>
            </span>
            <span id="landscape_description3" class="desc" style="bottom: 30px;"></span>
            <span id="landscape_date3" class="date"></span>
            <span class="heart_box" style="visibility: hidden;">
                <span id="heart3" class="heart" id="heart"></span>
            </span>
        </span>
        </br></br></br></br></br></br></br></br>
        </br></br></br></br></br></br></br></br>
        <span class="landscape_info" style="margin-left: -325px;">
            <span class="box">
                <img id='landscape_img6' class="landscape_img" alt="Landscape Image" width=325 height=200>
                &ensp; <span id='landscape_title6' class="display_text" style="position: relative; bottom: 50px;"></span>
            </span>
            <span id="landscape_description6" class="desc" style="bottom: 30px;"></span>
            <span id="landscape_date6" class="date"></span>
            <span class="heart_box" style="visibility: hidden;">
                <span id="heart6" class="heart" id="heart"></span>
            </span>
        </span>
    </span>

    <span class="center_box">   
        <span class="landscape_info" style="margin-left: 385px;">
            <span class="box">
                <img id='landscape_img2' class="landscape_img" alt="Landscape Image" width=325 height=200>
                &ensp; 
                <span id='landscape_title2' class="display_text" style="position: relative; bottom: 50px;"></span>
            </span>
            <span id="landscape_description2" class="desc" style="bottom: 30px;"></span>
            <span id="landscape_date2" class="date"></span>
            <span class="heart_box" style="visibility: hidden;">
                <span id="heart2" class="heart" id="heart"></span>
            </span>
        </span>
        </br></br></br></br></br></br></br></br>
        </br></br></br></br></br></br></br></br>
        <span class="landscape_info" style="margin-left: 395px;">
            <span class="box">
                <img id='landscape_img5' class="landscape_img" alt="Landscape Image" width=325 height=200>
                &ensp; <span id='landscape_title5' class="display_text" style="position: relative; bottom: 50px;"></span>
            </span>
            <span id="landscape_description5" class="desc" style="bottom: 30px;"></span>
            <span id="landscape_date5" class="date"></span>
            <span class="heart_box" style="visibility: hidden;">
                <span id="heart5" class="heart" id="heart"></span>
            </span>
        </span>
    </span>
</span>

</br></br></br></br></br></br></br></br>
</br></br></br></br></br></br></br></br></br>

@endsection