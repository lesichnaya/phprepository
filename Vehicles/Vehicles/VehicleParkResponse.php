<?php
namespace Vehicles;
enum VehicleParkResponse: string
{
    case SUCCESS = 'Транспорт добавлен успешно';
    case FAILURE = 'Транспорт не добавлен';
}
