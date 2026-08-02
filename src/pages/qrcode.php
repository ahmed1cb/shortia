<section class="qrcode-generator mx-auto max-w-5xl px-4 py-16 sm:py-24">

    <div class="mx-auto mb-10 max-w-xl text-center">
        <h2 class="heading text-3xl font-black tracking-tight text-neutral-900 dark:text-neutral-50">
            Create Your Custom QR Code
        </h2>
        <p class="mt-3 text-sm font-medium text-neutral-500 dark:text-neutral-400">
            Turn any link into a scannable QR code in seconds.
        </p>
    </div>

    <form class="form mx-auto max-w-xl rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm transition-shadow duration-300 hover:shadow-md sm:p-8 dark:border-neutral-800 dark:bg-neutral-900 dark:hover:shadow-none">
        <div class="space-y-5">
            <div>
                <label for="url" class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                    URL
                </label>
                <div class="relative">
                    <svg
                        class="pointer-events-none absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-neutral-400 dark:text-neutral-500"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M9.5 15.5 4.5 10.5a5.5 5.5 0 0 1 7.8-7.8l4 4a5.5 5.5 0 0 1-2.1 9.2"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M14.5 8.5 19.5 13.5a5.5 5.5 0 0 1-7.8 7.8l-4-4"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    <input
                        type="url"
                        class="link-url w-full rounded-xl border border-neutral-300 bg-white py-3 pl-11 pr-4 text-neutral-900 outline-none transition placeholder:text-neutral-400 focus:border-orange-600 focus:ring-2 focus:ring-orange-600/20 dark:border-neutral-700 dark:bg-neutral-950 dark:text-neutral-100 dark:placeholder:text-neutral-500 dark:focus:border-orange-500 dark:focus:ring-orange-500/20"
                        name="url"
                        id="url"
                        placeholder="https://example.com"
                    >
                </div>
            </div>

            <div class="preview flex h-52 flex-col items-center justify-center gap-3 rounded-xl border-2 border-dashed border-neutral-300 bg-neutral-50 sm:h-64 dark:border-neutral-700 dark:bg-neutral-950">
                <svg
                    class="h-10 w-10 text-neutral-300 dark:text-neutral-600"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M3 3h6v6H3zM15 3h6v6h-6zM3 15h6v6H3z"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M15 15h3v3h-3zM18 12h3M12 18h3"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                    />
                </svg>
                <p class="px-6 text-center text-sm font-medium text-neutral-400 dark:text-neutral-500">
                    Your QR code will appear here
                </p>
            </div>

            <button class="group submit flex w-full cursor-pointer items-center justify-center gap-2 rounded-xl bg-orange-600 px-4 py-3 font-semibold text-white transition-colors hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-600/40 dark:bg-orange-500 dark:hover:bg-orange-400">
                Generate
                <svg
                    class="h-4 w-4 transition-transform group-hover:translate-x-0.5"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M5 12h14m-6-6 6 6-6 6"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    />
                </svg>
            </button>
        </div>
    </form>

</section>
