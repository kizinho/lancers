@extends('layouts.master')

@section('styles')
<style>
        * {
            margin-right: 0px;
            margin-left: 0px;
            font-family: Ubuntu;
        }
        body {
            margin-top: 0px;
        }
        ul {
            display: inline-block;
            float: right;   
            width: fit-content;
            padding-inline-start: 10px;
            margin-top: 24px;
            
        }

        li {
            
            display: inline;
        }

        button {
            float: left;
            width: 80px;
            background: #ffffff;
            border: none;
            height: 100%;
            border-right: 2px solid rgba(196, 196, 196, 0.4);
        }
        header {
            padding-right: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
            overflow: hidden;
            height: 80px;
            padding: 5px;
            border-bottom: 4px solid;
            border-bottom-color: rgba(196, 196, 196, 0.4);   
        }
        .c-estimate {
            width: fit-content;
            float: left; 
            /* margin-left: auto; */
            /* margin-right: auto; */
            align-content: center;
            margin-left: 2%;
            margin-top: 30px;
            font-weight: bold;
            font-size: 20px;
            line-height: 33px;
        }
        a {
            text-decoration: none;
        }
        .next a {
            color: #ffffff;
        }
        .next {
            width: 10px;
            padding: 26px;
            background: rgba(196, 196, 196, 0.4);
            float: right;
            font-size: 24px;
            font-weight: bold;
            padding-right: 98px;
            padding-left: 47px;
            color: white;
}
        .cree {
            width: 80%;
            float: left;
            margin: 10px;
            border: 1px solid #999999;
            min-height: 300px;
            padding: 30px;
        }

        .cree:focus,
        .cree:focus-within {
            border: 4px solid #999999;
        }

        section {
            /* width: 80%; */
            margin: auto;
            /* position: relative; */
        }
         .a-next {
            background: rgba(207, 204, 204, 0.4);
            width: 200px;
            padding: 20px;
            margin: auto;
            margin-left: 27%;
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin-top: 12px;
            clear: both;
        }
        
        .a-next a {
            color: white;
        }
        p, h3 {
            width: fit-content;

        }
        .lists {
            width: fit-content;
        }
        .dropbtn, .project {
            /* margin-top: 37px; */
            width: 100%;
            height: 75px;
            padding: 10px;
            border: 1px solid rgba(145, 145, 145, 0.4);
            /* box-sizing: border-box; */

        }
        .project {
            /* margin-top: 30px; */
            border: 2px solid rgba(145, 145, 145, 0.4);
            height: 60px;
            width: 93% !important;
            overflow: hidden;
        }
        .l-proj {
            height: 47px;
            border: none;
            width: 100%;
        }
        .l-proj::placeholder {
            font-family: Ubuntu;
            font-size: 20px;
        }
        .l-proj:focus {
            border: none;
        }
        .req {
            /* margin-left: 221px; */

            float: right;
        }
        .signup {
            background: #0ABAB5;
            width: 145px;
            height: 54px;
            font-weight: 500;
            font-size: 18px;
            line-height: 21px;
            color: white;
        }

        .est {
            color: white; 
            background:  #0ABAB5;
            font-weight: bold;
            font-size: 28px;
            line-height: 32px;
            padding: 10px;
            text-align: center;
            padding-top: 10px !important;
        }
        li {
            padding: 15px;
            margin: 8px !important;
            margin-top: 21px;
        }
        li a {
            margin: 1px;
            padding: 1px;
            color: black;

        }

        #new_user {
            margin-top: 20px;
            margin-left: 2%;
        }
        .shift {
            font-weight: bold;
            font-size: 28px;
            line-height: 32px;
        }
        .login {
            font-weight: 500;
            font-size: 18px;
            line-height: 21px;
        }
        .hidden {
            display: none;
        }
        .disabled {
            cursor: not-allowed;
        }
        .box {
            min-height: 180px;
        }

    @media screen and (min-width: 600px) {
        section {
            margin-left: 18% !important;
            min-height: 500px;
            overflow: hidden;
        }
        .cree {
            width: 30%;
        }
        .a-next {
            margin-left: 29%;
        }
        .c-estimate {
            margin-left: 35%;
            font-size: 27px;
        }
        .shift {
            margin-left: 18% !important;
        }
}
    </style>
@endsection

@section('header')
    <div id="estimate">
        <header>
            <span class = "c-estimate shift">Estimates</span>
            <ul>
                <li class="login"><a  href="{{ url('/login') }}">Login</a></li>
                <li class = "signup" ><a class = "signup" href="{{ url('/register') }}">Signup</a></li>
            </ul>

        </header>
@endsection

@section('content')
        <section id="new_user">
            <div>
                <a class="btn est" id="est_content" href="{{ url('/guest/create_project') }}">Create Estimate</a> <br>
                <h2><p class = "pad">Estimates helps you place value to your work and time!</p></h2>
                <p class = "pad"><h5 class = "pad">Create and estimate and easily convert it to your invoice and send to your client</h5></p>
            </div>
        </section>
    </div>

    <div id="Create_estimate" class="hidden">
        <header>
            <button class="close"  id="close"><img  src="https://res.cloudinary.com/celx/image/upload/v1570718446/vhmdnd4sf3f5w3burj4m.svg" alt=""></button></li>
            <h4 class="c-estimate" >Create Estimate</h4>
           <!-- <ul class="heading-container"> -->
               <a class="next disabled" href="#" >NEXT</a>
       </header>
       <section>
           <h1>What project are you estimating</h1>
           <div class="cree">
               <div class="lists">
                   <div class="box">
                        <h3 class="first-head"><h3>A previously created project</h3></p>
                        <p class="contents">Find estimate for the previously created project, by
                            doing so the estimate gets populated with some of the data
                        </p>
                   </div>
                  
                   <div class="contents dropdown">
                           <select class="dropbtn" name="" onmouseout="verifyPath()" id="projectSelect">
                               <option>Select Project</option>
                               <option>Glacier Fintech App</option>
                               <option> AB Technology Solutions Branding</option>
                           </select>  
                           <!-- <i class="fa fa-caret-down"></i> -->
                           
                   </div>
               </div>
           </div>
   
   
           <div class="cree">
                   <div class="lists glacier">
                       <div class="box">
                            <h3 class="first-head">A new project</h3>
                            <p class="contents">Create a new estimate and set up a new project <br />
                                based on the information 
                            </p>
                       </div>
                      
                       <div class="contents project">
                           <input class="l-proj" type="text" onmouseout="verifyPath()" placeholder= "Project Name" name="" id="createProject">
                           <br>
                           <span class="req">Required</span></div>
       
                   </div>
               </div>
               <button class="a-next disabled"><a href="#">NEXT</a></button>
       </section>
    </div>

@endsection

@section('script')

<script>
    let est_content = document.querySelector('#est_content');
    let estimate_page = document.querySelector('#Create_estimate');

    let hide = () => {
       // estimate_page.classList.add('hidden');
       document.querySelector('#Create_estimate').classList.remove('hidden');
       document.querySelector('#estimate').classList.add('hidden');
       
    }

    est_content.addEventListener('click', hide );


    document.querySelector('#close').addEventListener('click', () => {
        document.querySelector('#estimate').classList.remove('hidden');
        document.querySelector('#Create_estimate').classList.add('hidden');

    });

        //createProject = '';
    
    
    

    function verifyPath(){
        let createProject = document.getElementById('createProject').value;
        let projectSelect = document.getElementById('projectSelect');

        let ele = projectSelect.selectedIndex;

        if ( createProject !== "" || ele !== 0 ){
            document.querySelector('.a-next').style.background = '#0ABAB5';
            document.querySelector('.next').style.background = '#0ABAB5';
            
            document.querySelector('.a-next').classList.remove('disabled');
            document.querySelector('.next').classList.remove('disabled');
        } else {
            //console.log('here works');
            document.querySelector('.next').style.background = 'rgba(207, 204, 204, 0.4)';
            document.querySelector('.next').classList.add('disabled');
            document.querySelector('.a-next').style.background = 'rgba(207, 204, 204, 0.4)';
            document.querySelector('.a-next').classList.add('disabled');
        }
        
    }
    </script>
    
@endsection
