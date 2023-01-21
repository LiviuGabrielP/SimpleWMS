<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="/" class="simple-text logo-mini">
          
        <div class="logo-image-big">
            <img src="assets\img\shipco.png">
          </div>   
        </a>
        <a href="/" class="simple-text logo-normal">
          SHIPCO
          
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="<?php if (urlIs("/")) {
                echo ("active");}?> ">
            <a href="/">
            
              <p>Home</p>
            </a>
          </li>
          <li class="<?php if (urlIs("/employees")) {
                echo ("active");}?> ">
            <a href="/employees">
           
              <p>Employees</p>
            </a>
          </li>
          <li class="<?php if (urlIs("/machines")) {
                echo ("active");}?> " ">
            <a href="/machines">
            
              <p>Machines</p>
            </a>
          </li>
          <li class="<?php if (urlIs("/clients")) {
                echo ("active");}?> " ">
            <a href="/clients">
            
              <p>Clients</p>
            </a>
          </li>
          <li class="<?php if (urlIs("/about")) {
                echo ("active");}?> ">
            <a href="/about">
            
              <p>About us</p>
            </a>
          </li>
          <li class="<?php if (urlIs("/contact")) {
                echo ("active");}?> " ">
            <a href="/contact">
           
              <p>Contact</p>
            </a>
          </li>

        </ul>
      </div>
    </div>