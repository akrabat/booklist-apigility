<?php
return array (
  'router' => 
  array (
    'routes' => 
    array (
      'book-api.rest.book' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/api/book[/:book_id]',
          'defaults' => 
          array (
            'controller' => 'BookAPI\\V1\\Rest\\Book\\Controller',
          ),
        ),
      ),
    ),
  ),
  'zf-versioning' => 
  array (
    'uri' => 
    array (
      0 => 'book-api.rest.book',
    ),
  ),
  'zf-rest' => 
  array (
    'BookAPI\\V1\\Rest\\Book\\Controller' => 
    array (
      'listener' => 'BookAPI\\V1\\Rest\\Book\\BookResource',
      'route_name' => 'book-api.rest.book',
      'identifier_name' => 'book_id',
      'collection_name' => 'book',
      'resource_http_methods' => 
      array (
        0 => 'GET',
        1 => 'PUT',
        2 => 'DELETE',
        3 => 'PATCH',
      ),
      'collection_http_methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
      ),
      'collection_query_whitelist' => 
      array (
      ),
      'page_size' => 25,
      'page_size_param' => NULL,
      'entity_class' => 'BookAPI\\V1\\Rest\\Book\\BookEntity',
      'collection_class' => 'BookAPI\\V1\\Rest\\Book\\BookCollection',
    ),
  ),
  'zf-content-negotiation' => 
  array (
    'controllers' => 
    array (
      'BookAPI\\V1\\Rest\\Book\\Controller' => 'HalJson',
    ),
    'accept-whitelist' => 
    array (
      'BookAPI\\V1\\Rest\\Book\\Controller' => 
      array (
        0 => 'application/vnd.book-api.v1+json',
        1 => 'application/hal+json',
        2 => 'application/json',
      ),
    ),
    'content-type-whitelist' => 
    array (
      'BookAPI\\V1\\Rest\\Book\\Controller' => 
      array (
        0 => 'application/vnd.book-api.v1+json',
        1 => 'application/json',
      ),
    ),
  ),
  'zf-hal' => 
  array (
    'metadata_map' => 
    array (
      'BookAPI\\V1\\Rest\\Book\\BookEntity' => 
      array (
        'identifier_name' => 'book_id',
        'route_name' => 'book-api.rest.book',
        'hydrator' => 'ArraySerializable',
      ),
      'BookAPI\\V1\\Rest\\Book\\BookCollection' => 
      array (
        'identifier_name' => 'book_id',
        'route_name' => 'book-api.rest.book',
        'is_collection' => true,
      ),
    ),
  ),
  'zf-apigility' => 
  array (
    'db-connected' => 
    array (
      'BookAPI\\V1\\Rest\\Book\\BookResource' => 
      array (
        'adapter_name' => 'DB\\Book',
        'table_name' => 'book',
        'hydrator_name' => 'ArraySerializable',
        'controller_service_name' => 'BookAPI\\V1\\Rest\\Book\\Controller',
        'table_service' => 'BookAPI\\V1\\Rest\\Book\\BookResource\\Table',
      ),
    ),
  ),
);
