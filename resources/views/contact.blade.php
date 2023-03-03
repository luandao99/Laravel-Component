@extends('layouts.app')

@section('content')
    <x-header title="Contact">
        <p class="text-lg leading-7 text-gray-500 dark:text-gray-400 border-b-2 border-neutral-700 pb-10">
            Learn more about Laravel and Tailwind CSS
        </p>

    </x-header>
    <div>
        <form class="text-center mx-auto pt-10">
            <div class="mb-5">
                <x-form.input class="bg-neutral-700" name="name" placeholder="Your Email" />
            </div>
            <div class="mb-5">
                <x-form.input class="bg-neutral-700" name="email" placeholder="Your Name" />
            </div>
            <div class="mb-5">
                <x-form.input class="bg-neutral-700" name="phone" placeholder="Your Phone" />
            </div>
            <div class="mb-5">
                <textarea class="bg-neutral-700" name="message" placeholder="Enter message" rows="5" cols="60" rounded-md w-full sm:w-3/6 h-12 text-white ></textarea>
            </div>

            <x-form.button  class="pl-4 mb-10 shadown-xl mx-auto block bg-green-400" type="button">Send Message</x-form.button>
        </form>
    </div>
@endsection
