<header
    class="sticky top-0 z-50 border-b border-neutral-200 bg-neutral-50/80 backdrop-blur dark:border-neutral-800 dark:bg-neutral-950/80"
>
    <div
        class="mx-auto flex max-w-5xl items-center justify-between gap-6 px-4 py-3 sm:px-6"
    >
        <a href="/" class="group flex min-w-0 items-center gap-3">
            <span
                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-orange-600 shadow-sm transition-transform group-hover:scale-105"
            >
                <svg
                    class="h-5 w-5 text-white"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M9.5 15.5 4.5 10.5a5.5 5.5 0 0 1 7.8-7.8l4 4a5.5 5.5 0 0 1-2.1 9.2"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="square"
                        stroke-linejoin="round"
                    />
                    <path
                        d="M14.5 8.5 19.5 13.5a5.5 5.5 0 0 1-7.8 7.8l-4-4"
                        stroke="currentColor"
                        stroke-width="2.5"
                        stroke-linecap="square"
                        stroke-linejoin="round"
                    />
                </svg>
            </span>

            <span class="min-w-0">
                <h2
                    class="truncate text-lg font-black tracking-tight text-neutral-900 dark:text-neutral-50"
                >
                    Shortia
                </h2>

                <p
                    class="hidden truncate text-[11px] font-medium uppercase tracking-widest text-neutral-500 dark:text-neutral-400 sm:block"
                >
                    URL shortener & QR generator
                </p>
            </span>
        </a>

        <nav class="flex items-center">
            <ul class="flex items-center gap-1 sm:gap-2">
                <li>
                    <a
                        href="/pages/url"
                        class="nav-link <?= $_SERVER["REQUEST_URI"] == "/pages/url"
                            ? "active"
                            : "" ?> text-xs font-semibold uppercase tracking-wide text-neutral-700 dark:text-neutral-300 dark:hover:text-orange-500"
                        >Url Shortener</a
                    >
                </li>
                <li>
                    <a
                        href="/pages/qrcode"
                        class="nav-link <?= $_SERVER["REQUEST_URI"] ==
                        "/pages/qrcode"
                            ? "active"
                            : "" ?> text-xs font-semibold uppercase tracking-wide text-neutral-700 dark:text-neutral-300 dark:hover:text-orange-500"
                        >Qr Generator</a
                    >
                </li>
            </ul>
        </nav>

        <div class="flex items-center">
            <button
                id="toggle-btn"
                class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-xl border border-neutral-300 text-neutral-600 transition-colors hover:border-orange-600 hover:text-orange-600 dark:border-neutral-700 dark:text-neutral-300 dark:hover:border-orange-500 dark:hover:text-orange-500"
                aria-label="Toggle dark mode"
            >
                <img
                    src="/src/icons/moon.svg"
                    alt="dark-mode-icon"
                    class="h-5 w-5"
                />
            </button>
        </div>
    </div>
</header>

<script src="/src/scripts/header.js"></script>
