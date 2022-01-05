<?php

const CONTROLLERS = array(
  
    [
      'method'  => 'GET',
      'url'     => '/users',
      'name'    => 'users',
      'use'     => 'UserController',
      'action'  => 'index'
    ],

    //------------------- FRONT-END -----------------//


    //HOME
    [
        'method'  => 'GET',
        'url'     => '/',
        'name'    => 'index',
        'use'     => 'front-end/HomeController',
        'action'  => 'index'
    ],
    [
        'method'  => 'GET',
        'url'     => '/index',
        'name'    => 'index',
        'use'     => 'front-end/HomeController',
        'action'  => 'index'
    ],
    //CART
    [
        'method'  => 'GET',
        'url'     => '/cart',
        'name'    => 'cart',
        'use'     => 'front-end/HomeController',
        'action'  => 'cart'
    ],
    //CART
    [
        'method'  => 'GET',
        'url'     => '/cart',
        'name'    => 'cart',
        'use'     => 'front-end/HomeController',
        'action'  => 'cart'
    ],
    //PRODUCTS
    [
        'method'  => 'GET',
        'url'     => '/products',
        'name'    => 'products',
        'use'     => 'front-end/HomeController',
        'action'  => 'products'
    ],
    //TOP BRANDS
    [
        'method'  => 'GET',
        'url'     => '/topbrands',
        'name'    => 'topbrands',
        'use'     => 'front-end/HomeController',
        'action'  => 'topbrands'
    ],
    //CART
    [
        'method'  => 'GET',
        'url'     => '/cart',
        'name'    => 'cart',
        'use'     => 'front-end/HomeController',
        'action'  => 'cart'
    ],
    //CONTACT
    [
        'method'  => 'GET',
        'url'     => '/contact',
        'name'    => 'contact',
        'use'     => 'front-end/HomeController',
        'action'  => 'contact'
    ],
    //DETAIL
    [
        'method'  => 'GET',
        'url'     => '/detail',
        'name'    => 'detail',
        'use'     => 'front-end/HomeController',
        'action'  => 'detail'
    ],
    //LOGIN
    [
        'method'  => 'GET',
        'url'     => '/login',
        'name'    => 'login',
        'use'     => 'front-end/HomeController',
        'action'  => 'login'
    ],
    //REGISTER
    [
        'method' => 'POST',
        'url'     => '/register',
        'name'    => 'auth.register',
        'use'     => 'front-end/AuthController',
        'action'  => 'register'
    ],



    //------------------- ADMIN -----------------//


    //INDEX
    [
        'method'  => 'GET',
        'url'     => '/admin',
        'name'    => 'index',
        'use'     => 'admin/HomeController',
        'action'  => 'index'
    ],

    [
        'method'  => 'GET',
        'url'     => '/admin/index',
        'name'    => 'index',
        'use'     => 'admin/HomeController',
        'action'  => 'index'
    ],
    //  TITLE & SLOGAN
    [
        'method'  => 'GET',
        'url'     => '/admin/titleslogan',
        'name'    => 'titleslogan',
        'use'     => 'admin/HomeController',
        'action'  => 'titleslogan'
    ],
    // SOCIAL MEDIA
    [
        'method'  => 'GET',
        'url'     => '/admin/social',
        'name'    => 'titleslogan',
        'use'     => 'admin/HomeController',
        'action'  => 'social'
    ],
    // COPYRIGHT
    [
        'method'  => 'GET',
        'url'     => '/admin/copyright',
        'name'    => 'titleslogan',
        'use'     => 'admin/HomeController',
        'action'  => 'copyright'
    ],
    // SLIDER ADD
    [
        'method'  => 'GET',
        'url'     => '/admin/addslider',
        'name'    => 'slideradd',
        'use'     => 'admin/HomeController',
        'action'  => 'slideradd'
    ],
    // SLIDER LIST
    [
        'method'  => 'GET',
        'url'     => '/admin/sliderlist',
        'name'    => 'sliderlist',
        'use'     => 'admin/HomeController',
        'action'  => 'sliderlist'
    ],
    // CATEGORY ADD
    [
        'method'  => 'GET',
        'url'     => '/admin/addcat',
        'name'    => 'addcat',
        'use'     => 'admin/HomeController',
        'action'  => 'addcat'
    ],
    // CATEGORY LIST
    [
        'method'  => 'GET',
        'url'     => '/admin/catlist',
        'name'    => 'catlist',
        'use'     => 'admin/HomeController',
        'action'  => 'catlist'
    ],
    // ADD PRODUCT
    [
        'method'  => 'GET',
        'url'     => '/admin/addproduct',
        'name'    => 'addproduct',
        'use'     => 'admin/HomeController',
        'action'  => 'addproduct'
    ],
    // LIST PRODUCT
    [
        'method'  => 'GET',
        'url'     => '/admin/productlist',
        'name'    => 'productlist',
        'use'     => 'admin/HomeController',
        'action'  => 'productlist'
    ],


    //----------------------------------------------------------------//



    [
      'method'  => 'GET',
      'url'     => '/users/{user_id}/edit',
      'name'    => 'users.edit',
      'use'     => 'UserController',
      'action'  => 'edit'
    ]

); 
