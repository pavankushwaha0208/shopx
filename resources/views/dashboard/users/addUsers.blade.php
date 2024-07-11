@extends('dashboard.layouts.main')

@section('dash-section')


<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div>
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add New User</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <div class="profile-img-edit position-relative">
                                    <img src="{{ url('dashboard/images/avatars/01.png')}}" alt="profile-pic"
                                        class="theme-color-default-img profile-pic rounded avatar-100">
                                    <img src="{{ url('dashboard/images/avatars/avtar_1.png')}}" alt="profile-pic"
                                        class="theme-color-purple-img profile-pic rounded avatar-100">
                                    <img src="{{ url('dashboard/images/avatars/avtar_2.png')}}" alt="profile-pic"
                                        class="theme-color-blue-img profile-pic rounded avatar-100">
                                    <img src="{{ url('dashboard/images/avatars/avtar_4.png')}}" alt="profile-pic"
                                        class="theme-color-green-img profile-pic rounded avatar-100">
                                    <img src="{{ url('dashboard/images/avatars/avtar_5.png')}}" alt="profile-pic"
                                        class="theme-color-yellow-img profile-pic rounded avatar-100">
                                    <img src="{{ url('dashboard/images/avatars/avtar_3.png')}}" alt="profile-pic"
                                        class="theme-color-pink-img profile-pic rounded avatar-100">
                                    <div class="upload-icone bg-primary">
                                        <svg class="upload-button icon-14" width="14" viewBox="0 0 24 24">
                                            <path fill="#ffffff"
                                                d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                        </svg>
                                        <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                </div>
                                <div class="img-extension mt-3">
                                    <div class="d-inline-block align-items-center">
                                        <span>Only</span>
                                        <a href="javascript:void();">.jpg</a>
                                        <a href="javascript:void();">.png</a>
                                        <a href="javascript:void();">.jpeg</a>
                                        <span>allowed</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">User Role:</label>
                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                    <option>Select</option>
                                    <option>Web Designer</option>
                                    <option>Web Developer</option>
                                    <option>Tester</option>
                                    <option>Php Developer</option>
                                    <option>Ios Developer </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="furl">Facebook Url:</label>
                                <input type="text" class="form-control" id="furl" placeholder="Facebook Url">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="turl">Twitter Url:</label>
                                <input type="text" class="form-control" id="turl" placeholder="Twitter Url">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="instaurl">Instagram Url:</label>
                                <input type="text" class="form-control" id="instaurl"
                                    placeholder="Instagram Url">
                            </div>
                            <div class="form-group mb-0">
                                <label class="form-label" for="lurl">Linkedin Url:</label>
                                <input type="text" class="form-control" id="lurl" placeholder="Linkedin Url">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">New User Information</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="fname">First Name:</label>
                                        <input type="text" class="form-control" id="fname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="lname">Last Name:</label>
                                        <input type="text" class="form-control" id="lname"
                                            placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="add1">Street Address 1:</label>
                                        <input type="text" class="form-control" id="add1"
                                            placeholder="Street Address 1">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="add2">Street Address 2:</label>
                                        <input type="text" class="form-control" id="add2"
                                            placeholder="Street Address 2">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="cname">Company Name:</label>
                                        <input type="text" class="form-control" id="cname"
                                            placeholder="Company Name">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="form-label">Country:</label>
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Select Country</option>
                                            <option>Caneda</option>
                                            <option>Noida</option>
                                            <option>USA</option>
                                            <option>India</option>
                                            <option>Africa</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="mobno">Mobile Number:</label>
                                        <input type="text" class="form-control" id="mobno"
                                            placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="altconno">Alternate Contact:</label>
                                        <input type="text" class="form-control" id="altconno"
                                            placeholder="Alternate Contact">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="pno">Pin Code:</label>
                                        <input type="text" class="form-control" id="pno" placeholder="Pin Code">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="city">Town/City:</label>
                                        <input type="text" class="form-control" id="city"
                                            placeholder="Town/City">
                                    </div>
                                </div>
                                <hr>
                                <h5 class="mb-3">Security</h5>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="form-label" for="uname">User Name:</label>
                                        <input type="text" class="form-control" id="uname"
                                            placeholder="User Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="pass">Password:</label>
                                        <input type="password" class="form-control" id="pass"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="rpass">Repeat Password:</label>
                                        <input type="password" class="form-control" id="rpass"
                                            placeholder="Repeat Password ">
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label class="form-label"><input class="form-check-input me-2"
                                            type="checkbox" value="" id="flexCheckChecked">Enable
                                        Two-Factor-Authentication</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Add New User</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="btn-download">
    <a class="btn btn-success px-3 py-2"
        href="https://iqonic.design/product/admin-templates/hope-ui-admin-free-open-source-bootstrap-admin-template/"
        target="_blank">
        <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.4"
                d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z"
                fill="currentColor"></path>
            <path
                d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z"
                fill="currentColor"></path>
        </svg>
    </a>
</div>
    
@endsection