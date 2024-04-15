<x-layout>
    <section class="body-font overflow-hidden text-gray-600">
        <div class="container mx-auto px-5 py-24">
            <div class="mx-auto flex flex-wrap lg:w-4/5">
                <img alt="ecommerce" class="h-64 w-full rounded-lg object-cover object-center lg:h-auto lg:w-1/2"
                    src="/storage/{{ $product->thumbnail }}">
                <div class="mt-6 flex w-full flex-col justify-between lg:mt-0 lg:w-1/2 lg:py-6 lg:pl-10">
                    <div>
                        <h2 class="title-font text-sm tracking-widest text-gray-500">{{ $product->category->title }}</h2>
                        <h1 class="title-font mb-1 text-3xl font-medium text-gray-900">{{ $product->title }}</h1>
                        <p class="my-6 leading-relaxed">{!! Str:: markdown($product->body) !!}</p>
                    </div>
                    <div class="flex">
                        <span class="title-font text-2xl font-medium text-gray-900">Rp. {{ $product->price }}</span>
                        <button
                            class="ml-auto flex rounded border-0 bg-indigo-500 px-6 py-2 text-white hover:bg-indigo-600 focus:outline-none">Buy</button>
                        <button
                            class="ml-4 inline-flex h-10 w-10 items-center justify-center rounded-full border-0 bg-gray-200 p-0 text-gray-500">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="h-5 w-5" viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
