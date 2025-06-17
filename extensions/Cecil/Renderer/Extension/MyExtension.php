<?php

namespace Cecil\Renderer\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class MyExtension extends AbstractExtension
{
  public function getFilters()
  {
    return [
      new TwigFilter('typography', [$this, 'formatTypography']),
    ];
  }

  public function formatTypography($content)
  {
    $patterns = [
      '/<h1/',
      '/<h2/',
      '/<h3/',
      '/<h4/',
      '/<h5/',
      '/<h6/',
      '/<p /',
      //'/<p>/',
      '/<ul>/',
      '/PrestaFlow/',
      '#<aside class="note note-tip">([a-zA-Z0-9_\-.,;!=\r\n": <\/>]*)</aside>#',
      '#<aside class="note note-warning">([a-zA-Z0-9_\-.,;!=\r\n": <\/>]*)</aside>#',
      '#<aside class="note note-danger">([a-zA-Z0-9_\-.,;!=\r\n": <\/>]*)</aside>#'
    ];
    $replacements = [
      '<h1 class="text-2xl font-bold dark:text-white pl-4 underline underline-offset-4 decoration-2 decoration-sky-500"',
      //'<h2 class="text-2xl font-bold dark:text-white pl-4 underline underline-offset-4 decoration-2 decoration-sky-500 p-2"',
      '<h2 class="text-xl font-bold dark:text-white pl-0 py-2"',
      '<h3 class="text-lg font-bold dark:text-white pl-4"',
      '<h4 class="text-md font-bold dark:text-white pl-6"',
      '<h5 class="text-base font-bold dark:text-white pl-8"',
      '<h6 class="text-base font-bold dark:text-white pl-10"',
      '<p class="text-justify text-base text-gray-800 dark:text-gray-200 p-2"',
      //'<p class="text-justify text-base text-gray-800 dark:text-gray-200 p-2">',
      '<ul class="marker:text-teal-600 list-disc ps-5 space-y-2 text-sm text-gray-600 dark:text-neutral-400">',
      '<span class="bg-clip-text bg-gradient-to-tl from-blue-400 to-teal-600 font-semibold text-transparent">PrestaFlow</span>',
      '<div class="my-4 w-full bg-white border border-gray-200 rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700" role="alert">
      <div class="flex p-4">
        <div class="flex-shrink-0">
          <svg class="flex-shrink-0 size-4 text-blue-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
          </svg>
        </div>
        <div class="note ms-3 text-sm text-gray-700 dark:text-gray-400">
            $1
        </div>
      </div>
    </div>',
    '<div class="my-4 w-full bg-white border border-gray-200 rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700" role="alert">
      <div class="flex p-4">
        <div class="flex-shrink-0">
          <svg class="flex-shrink-0 size-4 text-orange-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
          </svg>
        </div>
        <div class="note ms-3 text-sm text-gray-700 dark:text-gray-400">
            $1
        </div>
      </div>
    </div>',
    '<div class="my-4 w-full bg-white border border-gray-200 rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700" role="alert">
      <div class="flex p-4">
        <div class="flex-shrink-0">
          <svg class="flex-shrink-0 size-4 text-red-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
          </svg>
        </div>
        <div class="note ms-3 text-sm text-gray-700 dark:text-gray-400">
            $1
        </div>
      </div>
    </div>'
    ];
    try {
      $content = preg_replace($patterns, $replacements, $content);
    } catch (\Exception $e) {
      return 'Error';
      return $e->getMessage();
    }

    return $content;
  }
}
