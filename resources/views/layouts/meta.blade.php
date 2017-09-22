@if(isset($headers) && count($headers))
    <title>{{ isset($headers['metatitle']) && $headers['metatitle'] != NULL ? $headers['metatitle'] : 'Автоотзыв' }}</title>
    <meta name="keywords" content="{{ isset($headers['metakey']) && $headers['metakey'] != NULL ? $headers['metakey'] : '' }}">
    <meta name="description" content="{{ isset($headers['metadesc']) && $headers['metadesc'] != NULL ? $headers['metadesc'] : '' }}">
@endif