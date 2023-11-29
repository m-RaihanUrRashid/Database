@extends('layout')
@section('title' , 'Psychitrist Home')
@section('content')
<nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">ASSYLUM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

<style>
    .box {
        width: 1256px;
        height: 659px;
    }

    .box .group {
      
        width: 1256px;
        height: 100%;
        top: 0;
        left: 0;

    }

    .box .overlap-group {
        
        width: 1256px;
        height: 100%;
        background-color: #BEE0E8;
    }

    .box .overlap {
        position: relative;
        width: 305px;
        height: 100%;
        top: 0;
        left: 0;
        background-color: #a9c8ce;
    }

    .box .primary-button {
        display: flex;
        width: 205px;
        height: 46px;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 20px;
        position: absolute;
        top: 258px;
        left: 50px;
        background-color: var(--white-color);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .box .label {
        position: relative;
        width: fit-content;
        margin-top: -2px;
        font-family: "Georgia-Bold", Helvetica;
        font-weight: 700;
        color: var(--grey-2-color);
        font-size: 14px;
        text-align: center;
        letter-spacing: 0;
        line-height: 24px;
        white-space: nowrap;
    }

    .box .div {
        display: flex;
        width: 205px;
        height: 46px;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 20px;
        position: absolute;
        top: 192px;
        left: 50px;
        background-color: var(--white-color);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .box .text-wrapper {
        position: absolute;
        width: 287px;
        top: 158px;
        left: 612px;
        font-family: "Georgia-Bold", Helvetica;
        font-weight: 700;
        color: #000000;
        font-size: 48px;
        text-align: center;
        letter-spacing: 0;
        line-height: 57.6px;
    }

    .box .primary-button-2 {
        display: flex;
        width: 205px;
        height: 46px;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 20px;
        position: absolute;
        top: 304px;
        left: 653px;
        background-color: var(--white-color);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .box .line {
        position: absolute;
        width: 2px;
        height: 658px;
        top: 0;
        left: 305px;
    }

    :root {
        --primary-color: rgba(0, 147, 121, 1);
        --secondary-color: rgba(1, 109, 90, 1);
        --grey-1-color: rgba(184, 184, 184, 1);
        --grey-2-color: rgba(0, 0, 0, 1);
        --white-color: rgba(255, 255, 255, 1);
    }
</style>

<body>
    <div class="box">
        <div class="group">
            <div class="overlap-group">
                <div class="overlap">
                    <div class="primary-button">
                        <div class="label">Appointments</div>
                    </div>
                    <div class="div">
                        <div class="label">Prescription</div>
                    </div>
                </div>
                <div class="text-wrapper">Welcome Psychitrist!</div>
                <div class="primary-button-2">
                    <div class="label">Info</div>
                </div>
                <img class="line" src="img/line-1.svg" />
            </div>
        </div>
    </div>
</body>