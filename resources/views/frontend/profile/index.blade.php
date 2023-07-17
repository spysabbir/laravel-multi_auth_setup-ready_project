<h2>Profile</h2>

<section>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="">
        @csrf
        @method('patch')

        <div>
            <label for="name">Name</label>
            <input id="name" class="" type="text" name="name" value="{{ old('name', $user->name) }}" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" class="" type="email" name="email" value="{{ old('email', $user->email) }}" />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="">
                        Your email address is unverified.
                        <button form="send-verification" class="">
                            Click here to re-send the verification email.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="">
                            A new verification link has been sent to your email address.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="">
            <button type="submit" class="btn">Save</button>

            @if (session('status') === 'profile-updated')
                <p>Saved</p>
            @endif
        </div>
    </form>
</section>

<section>
    <form method="post" action="{{ route('password.update') }}" class="">
        @csrf
        @method('put')

        <div>
            <label for="current_password">Current Password</label>
            <input id="current_password" class="" type="password" name="current_password" />
            @error('current_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">New Password</label>
            <input id="password" class="" type="password" name="password" />
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" class="" type="password" name="password_confirmation" />
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="">
            <button type="submit" class="btn">Save</button>

            @if (session('status') === 'password-updated')
                <p>Saved</p>
            @endif
        </div>
    </form>
</section>

<section>
    <form method="post" action="{{ route('profile.destroy') }}" class="">
        @csrf
        @method('delete')

        <h2 class="">
            Are you sure you want to delete your account?
        </h2>

        <p class="">
            Once your account is deleted, all of its resources and data will be permanently deleted.
            Please enter your password to confirm you would like to permanently delete your account.
        </p>

        <div>
            <label for="password">New Password</label>
            <input id="password" class="" type="password" name="password" />
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="">
            <button type="submit" class="btn">
                Delete Account
            </button>
        </div>
    </form>
</section>
