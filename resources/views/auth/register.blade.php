@extends('layouts.app')

@section('content')
	<div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
		<div class="max-w-lg mx-auto">
			<a href="{{ route('index') }}">
				<h1 class="text-2xl font-bold text-center text-teal-600 sm:text-3xl">
					Get started today
				</h1>
			</a>
			<p class="max-w-md mx-auto mt-4 text-center text-gray-500">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sunt
				dolores deleniti inventore quaerat mollitia?
			</p>
			<form action="{{ route('register') }}" method="POST" class="p-8 mt-6 mb-0 space-y-4 rounded-lg shadow-2xl">
				@csrf
				<p class="text-lg font-medium">Sign up to your account</p>
				<div>
					<label for="name" class="text-sm font-medium">Name</label>
					<div class="relative mt-1">
						<input type="text" name="name" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter name"/>
					</div>
				</div>
				<div>
					<label for="email" class="text-sm font-medium">Email</label>
					<div class="relative mt-1">
						<input type="email" name="email" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter email"/>
					</div>
				</div>
				<div>
					<label for="password" class="text-sm font-medium">Password</label>
					<div class="relative mt-1">
						<input type="password" name="password" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter password"/>
					</div>
				</div>
				<button type="submit" class="block w-full px-5 py-3 text-sm font-medium text-white bg-teal-600 rounded-lg">
					Sign up
				</button>
				<p class="text-sm text-center text-gray-500">
					Do you have account?
					<a href="{{ route('login') }}" class="underline">Sign in</a>
				</p>
			</form>
		</div>
	</div>
@endsection
