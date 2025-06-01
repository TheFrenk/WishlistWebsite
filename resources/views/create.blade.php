<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @PwaHead
    <title>Wishlist</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-md sm:py-16 lg:px-6">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
            Добавьте своё желание
        </h2>
        <p class="mb-8 font-light text-gray-500 sm:text-xl dark:text-gray-400">
            Поделитесь тем, что вам нужно или о чём мечтаете. Это поможет вашим друзьям и близким порадовать вас.
        </p>
        <form action="#" class="space-y-6">
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название желания</label>
                <input type="text" id="title" name="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Например: Новый рюкзак" required>
            </div>
            <div class="flex space-x-4">
                <div class="flex-1">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Цена</label>
                    <input type="text" id="price" placeholder="Сумма" class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400"/>
                </div>

                <div class="w-28">
                    <label for="currency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Валюта</label>
                    <select id="currency" class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm font-semibold text-gray-900 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                        <option value="UAH">UAH</option>
                        <option value="USD">USD</option>
                        <option value="EUR">EUR</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ссылка</label>
                <input type="url" id="link" name="link" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="https://example.com">
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание</label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Подробнее о желании..."></textarea>
            </div>
            <div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Изображение (опционально)</label>
                <label for="File" class="flex flex-col items-center rounded border border-gray-300 bg-white p-4 text-gray-900 shadow-sm sm:p-6 dark:border-gray-700 dark:bg-gray-900 dark:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75"/></svg>

                    <span class="mt-4 font-medium dark:text-white"> Upload your file(s) </span>
                    <span class="mt-2 inline-block rounded border border-gray-200 bg-gray-50 px-3 py-1.5 text-center text-xs font-medium text-gray-700 shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700">Browse files</span>
                    <input multiple type="file" id="File" class="sr-only" />
                </label>
            </div>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                <button type="submit" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-white rounded-lg bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Создать
                </button>
                <a href="#" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    Отмена
                </a>
            </div>
        </form>
    </div>
</section>
@RegisterServiceWorkerScript
</body>
</html>
