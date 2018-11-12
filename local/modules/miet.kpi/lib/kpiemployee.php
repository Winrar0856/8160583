<?php
namespace MIET\KPI;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class KPIEmployeeTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 't_employee_kpi';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('KPI_ENTITY_ID_FIELD')
            ),
            'UF_KPI' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('KPI_ENTITY_UF_KPI_FIELD')
            ),
            'UF_VALUE' => array(
                'data_type' => 'float',
                'required' => true,
                'validation' => array(//Метод-валидатор значения
                    __CLASS__,//Имя класса метода-валидатора, в
                    данном случае текущий класс
 'validateValue' //Название метода-валидатора в
данном классе
 ),
'title' =>
Loc::getMessage('KPI_ENTITY_UF_VALUE_FIELD')
 ),
 'UF_CREATED_BY' => array(
        'data_type' => 'integer',
        'required' => true,
        'title' =>
            Loc::getMessage('KPI_ENTITY_UF_CREATED_BY_FIELD')
    ),
 'UF_CREATED_BY' => array(
        'data_type' => 'integer',
        'required' => true,
        'title' =>
            Loc::getMessage('KPI_ENTITY_UF_CREATED_BY_FIELD')
    ),
 'UF_CREATED' => array(
        'data_type' => 'datetime',
        'required' => true,
        'title' =>
            Loc::getMessage('KPI_ENTITY_UF_CREATED_FIELD')
    ),
 'UF_CHANGED_BY' => array(
        'data_type' => 'integer',
        'title' =>
            Loc::getMessage('KPI_ENTITY_UF_CHANGED_BY_FIELD')
    ),
 'UF_CHANGED' => array(
        'data_type' => 'datetime',
        'title' =>
            Loc::getMessage('KPI_ENTITY_UF_CHANGED_FIELD'),
    ),
 'UF_PERIOD' => array(
        'data_type' => 'date',
        'title' =>
            Loc::getMessage('KPI_ENTITY_UF_PERIOD_FIELD'),
    ),
 //Описываем все связи с другими таблицами (внешние ключи)
 new Entity\ReferenceField(
     'UF_KPI',
     'Bitrix\Iblock\ElementTable',
     array('=this.UF_KPI' => 'ref.ID')
 ),
 new Entity\ReferenceField(
     'UF_CREATED_BY',
     'Bitrix\Iblock\SectionElementTable',
     array('=this.UF_CREATED_BY' => 'ref.ID')
 ),
 new Entity\ReferenceField(
     'UF_CREATED_BY',
     'Bitrix\Main\UserTable',
     array('=this.UF_CREATED_BY' => 'ref.ID')
 ),
 new Entity\ReferenceField(
     'UF_CHANGED_BY',
     'Bitrix\Main\UserTable',
     array('=this.UF_CHANGED_BY' => 'ref.ID')
 )
 );
 }
    public static function validateValue()
    {
        return array(
            new Entity\Validator\Range(0, null, false, array("MIN" =>
                "Количество должно быть больше нуля")),
        );
    }
}