@extends('layout.menu')
@section('konten')
<div class=" flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-sm">
        <h2 class="text-2xl font-bold text-blue-600 mb-6">Login</h2>
        
        <form>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input
                    type="email"
                    id="email"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                    placeholder="hakeem@digital.com"
                    required
                />
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input
                    type="password"
                    id="password"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
                    placeholder="********"
                    required
                />
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50"
            >
                Login
            </button>
        </form>
    </div>
</div>
@endsection