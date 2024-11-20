<div class="flex-none w-full max-w-full px-3 mb-4 draggable">
    <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border"
    >
        <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl"></div>
        <div class="flex-auto p-4">
            <div class="flex flex-wrap -mx-3">
                <div
                    class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12"
                >
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border"
                    >
                        <div class="relative">
                            <a class="block shadow-xl rounded-2xl">
                                <img
                                    src="{{ asset($project->thumb_image) }}"
                                    alt="img-blur-shadow"
                                    class="max-w-full shadow-soft-2xl rounded-2xl h-52"
                                />
                            </a>
                        </div>
                        <div class="flex-auto px-1 pt-6">
                            <p
                                class="relative z-10 mb-2 leading-normal text-transparent bg-slate-700 text-sm bg-clip-text"
                            >
                                Project #{{ $project->id }}
                            </p>
                            <a href="javascript:;">
                                <h5 class="font-display">Modern</h5>
                            </a>
                            <p class="mb-6 leading-normal text-sm">
                                {{ $project->project_title }}
                            </p>
                            <div class="flex items-center justify-between">
                                <button
                                    type="button"
                                    class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-300 text-gray-900 hover:border-gray-300 hover:bg-transparent hover:text-gray-600 hover:opacity-75 hover:shadow-none active:bg-gray-300 active:text-white active:hover:bg-transparent active:hover:text-gray-300"
                                >
                                    {{ $project->btn_text }}
                                </button>
                                <div class="mt-2">
                                    <a
                                        href="javascript:;"
                                        class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30"
                                        data-target="tooltip_trigger"
                                        data-placement="bottom"
                                    >
                                        <img
                                            class="w-full rounded-circle"
                                            alt="Image placeholder"
                                            src="https://demos.creative-tim.com/soft-ui-dashboard-tailwind/assets/img/team-2.jpg"
                                        />
                                    </a>
                                    <div
                                        data-target="tooltip"
                                        class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                        role="tooltip"
                                        data-popper-placement="bottom"
                                        style="
                                            position: absolute;
                                            inset: 0px auto auto 0px;
                                            margin: 0px;
                                            transform: translate3d(
                                                467.5px,
                                                1400.5px,
                                                0px
                                            );
                                        "
                                    >
                                        Elena Morison
                                        <div
                                            class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                            data-popper-arrow=""
                                            style="
                                                position: absolute;
                                                left: 0px;
                                                transform: translate3d(
                                                    0px,
                                                    0px,
                                                    0px
                                                );
                                            "
                                        ></div>
                                    </div>
                                    <a
                                        href="javascript:;"
                                        class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30"
                                        data-target="tooltip_trigger"
                                        data-placement="bottom"
                                    >
                                        <img
                                            class="w-full rounded-circle"
                                            alt="Image placeholder"
                                            src="https://demos.creative-tim.com/soft-ui-dashboard-tailwind/assets/img/team-2.jpg"
                                        />
                                    </a>
                                    <div
                                        data-target="tooltip"
                                        class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                        role="tooltip"
                                        data-popper-placement="bottom"
                                        style="
                                            position: absolute;
                                            inset: 0px auto auto 0px;
                                            margin: 0px;
                                            transform: translate3d(
                                                479.5px,
                                                1400.5px,
                                                0px
                                            );
                                        "
                                    >
                                        Ryan Milly
                                        <div
                                            class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                            data-popper-arrow=""
                                            style="
                                                position: absolute;
                                                left: 0px;
                                                transform: translate3d(
                                                    0px,
                                                    0px,
                                                    0px
                                                );
                                            "
                                        ></div>
                                    </div>
                                    <a
                                        href="javascript:;"
                                        class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30"
                                        data-target="tooltip_trigger"
                                        data-placement="bottom"
                                    >
                                        <img
                                            class="w-full rounded-circle"
                                            alt="Image placeholder"
                                            src="https://demos.creative-tim.com/soft-ui-dashboard-tailwind/assets/img/team-3.jpg"
                                        />
                                    </a>
                                    <div
                                        data-target="tooltip"
                                        class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                        role="tooltip"
                                        data-popper-placement="bottom"
                                        style="
                                            position: absolute;
                                            inset: 0px auto auto 0px;
                                            margin: 0px;
                                            transform: translate3d(
                                                492px,
                                                1400.5px,
                                                0px
                                            );
                                        "
                                    >
                                        Nick Daniel
                                        <div
                                            class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                            data-popper-arrow=""
                                            style="
                                                position: absolute;
                                                left: 0px;
                                                transform: translate3d(
                                                    0px,
                                                    0px,
                                                    0px
                                                );
                                            "
                                        ></div>
                                    </div>
                                    <a
                                        href="javascript:;"
                                        class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-white transition-all duration-200 border-2 border-white border-solid ease-soft-in-out text-xs rounded-circle hover:z-30"
                                        data-target="tooltip_trigger"
                                        data-placement="bottom"
                                    >
                                        <img
                                            class="w-full rounded-circle"
                                            alt="Image placeholder"
                                            src="https://demos.creative-tim.com/soft-ui-dashboard-tailwind/assets/img/team-4.jpg"
                                        />
                                    </a>
                                    <div
                                        data-target="tooltip"
                                        class="hidden px-2 py-1 text-white bg-black rounded-lg text-sm"
                                        role="tooltip"
                                        data-popper-placement="bottom"
                                        style="
                                            position: absolute;
                                            inset: 0px auto auto 0px;
                                            margin: 0px;
                                            transform: translate3d(
                                                451.5px,
                                                1429px,
                                                0px
                                            );
                                        "
                                    >
                                        Peterson
                                        <div
                                            class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                            data-popper-arrow=""
                                            style="
                                                position: absolute;
                                                left: 0px;
                                                transform: translate3d(
                                                    0px,
                                                    0px,
                                                    0px
                                                );
                                            "
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card body end -->
            </div>
        </div>
    </div>
</div>
