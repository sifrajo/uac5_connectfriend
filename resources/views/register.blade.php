@extends('layout.master')
@section('content')
    <!-- component -->
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center" style="color: #FF5FA2">Sign up</h1>

                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="name"
                        placeholder="Name" required />
                        @error('name')
                            <h1 class="text-red-600 text-xl">
                                {{ $message }}
                            </h1>
                        @enderror

                    <input type="email" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                        placeholder="Email" required />
                        @error('email')
                            <h1 class="text-red-600 text-xl">
                                {{ $message }}
                            </h1>
                        @enderror

                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                        placeholder="Password" required />
                        @error('password')
                            <h1 class="text-red-600 text-xl">
                                {{ $message }}
                            </h1>
                        @enderror

                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="instagram"
                        placeholder="Instagram" required />
                        @error('instagram')
                            <h1 class="text-red-600 text-xl">
                                {{ $message }}
                            </h1>
                        @enderror

                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="hobbies"
                        placeholder="Hobbies" required />
                        @error('hibbies')
                            <h1 class="text-red-600 text-xl">
                                {{ $message }}
                            </h1>
                        @enderror
                    <input
                        class="block my-4 w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                        id="file-upload" accept=".jpeg, .jpg, .png" required onchange="displayPhoto()" type="file" name="image">

                        <p id="Preview" class="font-black hidden">Hobby photo preview:</p>
                        <img src="" alt="" class="img-preview mb-4 object-cover w-full">
                    @error('image')
                        <h1 class="text-red-600 text-xl">
                            {{ $message }}
                        </h1>
                    @enderror

                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="phone"
                        placeholder="Phone Number" required />
                        @error('phone number')
                            <h1 class="text-red-600 text-xl">
                                {{ $message }}
                            </h1>
                        @enderror

                    <div class="my-4">
                        <input type="radio" name="gender" id="L" value="L" required>
                        <label for="L">Man</label>
                        <input type="radio" name="gender" id="P" value="P" required>
                        <label for="P">Woman</label>
                    </div>

                    <button type="submit"
                        class="w-full text-center bg-green-400 py-3 rounded-md text-white hover:bg-blue-400" style="background-color: #FF5FA2">Create
                        Account</button>

                </form>
                <div class="text-grey-dark mt-6">
                    Already have an account?
                    <a class="no-underline border-b border-blue text-blue" href="../login/">
                        Log in
                    </a>.
                </div>
            </div>
        </div>


    <script>
        function displayPhoto() {
            const image = document.querySelector('#file-upload');
            const previewed = document.querySelector('.img-preview');
            const preview = document.querySelector('#Preview');

            preview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                previewed.src = oFREvent.target.result
            }
        }
    </script>


    @endsection


