
 <div class="accountbox__register tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{ route('register-user') }}" method="post">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" placeholder="User name" value="{{old('name')}}" name="name">
                                <span class="text-danger">@error('name') {{$message}} @enderror</span>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="email" placeholder="Email address" value="{{old('email')}}" name="email">
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Password" name="password">
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" placeholder="Confirm password" name="password_confirmation">
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
               
                  
                </div>
            </div>
        </div><!-- //Login Form -->