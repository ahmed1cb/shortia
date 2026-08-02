<section class="qrcode-generator mx-auto max-w-5xl px-4 py-16 sm:py-24">

    <div class="mx-auto mb-10 max-w-xl text-center">
        <h2 class="heading text-3xl font-black tracking-tight text-neutral-900 dark:text-neutral-50">
            Create Your Custom QR Code
        </h2>
        <p class="mt-3 text-sm font-medium text-neutral-500 dark:text-neutral-400">
            Turn any link into a scannable QR code in seconds.
        </p>
    </div>

    <form class="form mx-auto max-w-xl rounded-2xl border border-neutral-200 bg-white p-6 shadow-sm sm:p-8 dark:border-neutral-800 dark:bg-neutral-900">
        <div class="space-y-5">
            <div>
                <label for="url" class="mb-2 block text-sm font-semibold text-neutral-700 dark:text-neutral-300">
                    URL
                </label>
                <input
                    type="url"
                    class="link-url w-full rounded-xl border border-neutral-300 bg-white px-4 py-3 text-neutral-900 outline-none transition placeholder:text-neutral-400 focus:border-orange-600 focus:ring-2 focus:ring-orange-600/20 dark:border-neutral-700 dark:bg-neutral-950 dark:text-neutral-100 dark:placeholder:text-neutral-500 dark:focus:border-orange-500 dark:focus:ring-orange-500/20"
                    name="url"
                    id="url"
                    placeholder="https://example.com"
                >
            </div>

            <div class="preview flex h-52 items-center justify-center rounded-xl border-2 border-dashed border-neutral-300 bg-neutral-50 sm:h-64 dark:border-neutral-700 dark:bg-neutral-950">
                <p class="px-6 text-center text-sm font-medium text-neutral-400 dark:text-neutral-500">
                    Your QR code will appear here
                </p>
            </div>

            <button class="submit w-full cursor-pointer rounded-xl bg-orange-600 px-4 py-3 font-semibold text-white transition-colors hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-600/40 dark:bg-orange-500 dark:hover:bg-orange-400">
                Generate
            </button>
        </div>
    </form>

</section>
