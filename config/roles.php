<?php
/**
 * Created by PhpStorm.
 * User: JOHN
 * Date: 4/21/2021
 * Time: 10:51 PM
 */

return [
    'profile' =>[
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'passUpdateIndex' => ['admin'],
        'passUpdate' => ['admin'],
    ],
    'ward' => [
        'index' => ['admin', 'mayor'],
        'create' => ['admin'],
        'store' => ['admin', 'mayor'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'employee' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'downloadImage' =>['admin'],
        'downloadFile' =>['admin'],
    ],

    'people' => [
        'index' => ['admin','commissioner'],
        'create' => ['admin','commissioner'],
        'store' => ['admin'],
        'show' => ['admin', 'commissioner'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'download' => ['admin'],
    ],

    'commissioner' => [
        'index' => ['admin','commissioner'],
        'show' => ['admin'],
        'update' => ['admin'],
        'destroy' => ['admin'],
    ],

    'market' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'hospital' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'educationInstitution' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'publicToilet' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'notice' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'download' =>['admin'],
    ],

    'officialForm' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'downloadFile' => ['admin'],
    ],

    'work' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'vehicleLicence' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'renew' => ['admin'],
        'renewUpdate' => ['admin'],
    ],

    'vehicleType' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'reliefCategory' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'reliefCard' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'contractorLicence' => [
        'index' => ['admin'],
        'create' =>['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'download' => ['admin'],
        'renew' => ['admin'],
        'renewUpdate' => ['admin'],
        'history' => ['admin'],
    ],

    'contractorCategory' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'tradeLicence' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'download' => ['admin'],
        'renew' => ['admin'],
        'renewUpdate' => ['admin'],
        'history' => ['admin'],
    ],

    'businessCategory' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'characterCertificate' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'equipmentCategory' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'equipment' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'tender' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'downloadFile' => ['admin'],
    ],

    'circular' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'download' => ['admin'],
    ],

    'emergencyCall' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],

    'officialOrder' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'download' => ['admin'],
    ],

    'wasteManagement' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'download' => ['admin'],
    ],

    'smsTemplate' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
        'send' => ['admin'],
    ],

    'sms' => [
        'index' => ['admin'],
        'send' => ['admin'],

    ],
    'streetLamp' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],

    ],
    'category' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],

    ],
    'subCategory' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],
    'equipmentRent' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
        'delete' => ['admin'],
        'destroy' => ['admin'],
    ],
    'invoice' => [
        'index' => ['admin'],
        'create' => ['admin'],
        'store' => ['admin'],
        'show' => ['admin'],
        'edit' => ['admin'],
        'update' => ['admin'],
    ],








];

