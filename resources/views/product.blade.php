<x-layout>
    <div class="bg-white pt-20">
        <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
            <div class="mb-20 flex w-full flex-col text-center text-gray-600">
                <h1 class="title-font mb-4 text-3xl font-bold tracking-tight text-lime-900 sm:text-4xl">Our Product</h1>
                <p class="mx-auto text-base leading-relaxed lg:w-2/3">Introducing our fresh Salad Selection! Made with
                    locally sourced greens and vibrant veggies.<br>Elevate your salad game today!
                </p>
            </div>
            <h2 class="sr-only">Products</h2>
            <div class="mx-auto mb-20 flex flex-wrap justify-center">
                @foreach ($categories as $category)
                    @php
                        $isActive = false;

                        if (request()->route('sort') == $category->sort) {
                            $isActive = true;
                        }
                    @endphp
                    <a href="{{ route('product', $category->sort) }}" @class([
                        'title-font inline-flex w-1/2 items-center justify-center',
                        'rounded-t border-b-2 border-lime-500 bg-gray-100 py-3 font-medium leading-none tracking-wider text-lime-500 sm:w-auto sm:justify-start sm:px-6' => $isActive,
                        'border-b-2 border-gray-200 py-3 font-medium leading-none tracking-wider text-lime-900 hover:text-lime-500 sm:w-auto sm:justify-start sm:px-6' => !$isActive,
                    ])>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="mr-3 h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                        </svg>
                        {{ $category->title }}
                    </a>
                @endforeach
            </div>
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($selectedCategory->products as $product)
                    <a href="{{ route('productDetails', $product) }}" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="/storage/{{ $product->thumbnail }}"
                                alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-sm text-gray-700">{{ $product->title }}</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">Rp. {{ $product->price }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
