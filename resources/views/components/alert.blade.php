@props(['type'])

@php
    switch ($type) {

      case 'info':
        $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;

        case 'danger':
        $class = 'text-red-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;

        case 'success':
        $class = 'text-green-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;

        case 'warning':
        $class = 'text-yellow-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;

        case 'drak':
        $class = 'text-gray-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;
      
      default:
      $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;
    }
@endphp



<div class="p-4 mb-4 text-sm  rounded-lg {{$class}}" role="alert">
    <span class="font-medium">{{$title ?? ''}}</span> {{$slot}}
  </div>