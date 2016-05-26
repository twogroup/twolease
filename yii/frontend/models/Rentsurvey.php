<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rentsurvey".
 *
 * @property integer $rent_id
 * @property string $rent_people
 * @property string $by_rent_people
 * @property string $rent_address
 * @property string $rent_area
 * @property string $rent_start_time
 * @property string $rent_end_time
 * @property string $year_rental
 * @property string $mon_rental
 * @property string $rent_month
 * @property string $property_class
 * @property string $other_charges
 * @property string $rent_money
 * @property integer $status
 * @property string $other
 */
class Rentsurvey extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rentsurvey';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rent_start_time', 'rent_end_time'], 'safe'],
            [['status'], 'integer'],
            [['rent_people', 'by_rent_people', 'rent_address', 'rent_area', 'year_rental', 'mon_rental', 'rent_month', 'property_class', 'other_charges', 'rent_money', 'other'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rent_id' => 'Rent ID',
            'rent_people' => 'Rent People',
            'by_rent_people' => 'By Rent People',
            'rent_address' => 'Rent Address',
            'rent_area' => 'Rent Area',
            'rent_start_time' => 'Rent Start Time',
            'rent_end_time' => 'Rent End Time',
            'year_rental' => 'Year Rental',
            'mon_rental' => 'Mon Rental',
            'rent_month' => 'Rent Month',
            'property_class' => 'Property Class',
            'other_charges' => 'Other Charges',
            'rent_money' => 'Rent Money',
            'status' => 'Status',
            'other' => 'Other',
        ];
    }
}
