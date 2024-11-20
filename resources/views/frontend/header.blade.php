<section class="bg-white dark:bg-white mx-12">
    <div
        class="relative grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12"
    >
        <div class="mr-auto place-self-center lg:col-span-12">
            <h1
                class="font-normal max-w-4xl mb-4 text-2xl tracking-tight leading-none md:text-3xl xl:text-4xl dark:text-black w-full"
            >
                {{ $header->title_1 }}
            </h1>
            <h1
                class="font-semibold max-w-4xl mb-4 text-6xl tracking-tight leading-none md:text-9xl xl:text-9xl dark:text-black w-full"
            >
                {{ $header->title_2 }}
            </h1>
            <h1
                class="font-medium max-w-2xl mb-4 text-2xl tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-black"
            >
                Dhaka, Bangladesh
            </h1>
            <p
                class="max-w-2xl mb-6 font-normal text-gray-500 lg:mb-8 md:text-lg lg:text-lg dark:text-gray-700 w-80 mt-28"
            >
                {{ $header->desc }}
            </p>
            <p
                class="max-w-2xl mb-6 font-normal text-gray-500 lg:mb-8 md:text-lg lg:text-lg dark:text-gray-700 w-80 mt-28"
            >
                Passionate about transforming ideas into visually compelling
                interfaces and shaping the future of digital innovation.
            </p>
            <a
                href="#"
                class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 mt-6 ps-0"
            >
                Get started
                <svg
                    class="w-5 h-5 ml-2 -mr-1"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </a>
            <a
                href=""
                class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-black dark:border-gray-300 dark:hover:bg-gray-300 dark:focus:ring-gray-300"
            >
                {{ $header->btn_text }}
            </a>
        </div>
        <div
            class="absolute hidden lg:mt-0 lg:col-span-0 lg:flex top-72 right-0 w-2/4"
        >
            <img
                class="float-right"
                src="{{ asset($header->profile_img) }}"
                alt="mockup"
            />
        </div>
    </div>
</section>
