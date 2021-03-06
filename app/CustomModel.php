<?php

namespace LaraTemplate;

use Jenssegers\Date\Date as Carbon;
use Illuminate\Database\Eloquent\Model;

class CustomModel extends Model
{
    /**
     * Get underline table name statically
     *
     * @return string
     */
    public static function getTableName()
    {
        return (new static())->getTable();
    }

    /**
     * Get a fresh timestamp for the model.
     *
     * @return \Jenssegers\Date\Date
     */
    public function freshTimestamp()
    {
        return new Carbon;
    }

    /**
     * Return a timestamp as DateTime object.
     *
     * @param  mixed $value
     * @return \Jenssegers\Date\Date
     */
    protected function asDateTime($value)
    {
        // If this value is already a Carbon instance, we shall just return it as is.
        // This prevents us having to reinstantiate a Carbon instance when we know
        // it already is one, which wouldn't be fulfilled by the DateTime check.
        if ($value instanceof Carbon) {
            return $value;
        }

        // If the value is already a DateTime instance, we will just skip the rest of
        // these checks since they will be a waste of time, and hinder performance
        // when checking the field. We will just return the DateTime right away.
        if ($value instanceof DateTime) {
            return Carbon::instance($value);
        }

        // If this value is an integer, we will assume it is a UNIX timestamp's value
        // and format a Carbon object from this timestamp. This allows flexibility
        // when defining your date fields as they might be UNIX timestamps here.
        if (is_numeric($value)) {
            return Carbon::createFromTimestamp($value);
        }

        // If the value is in simply year, month, day format, we will instantiate the
        // Carbon instances from that format. Again, this provides for simple date
        // fields on the database, while still supporting Carbonized conversion.
        if (preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $value)) {
            return Carbon::createFromFormat('Y-m-d', $value)->startOfDay();
        }

        // Finally, we will just assume this date is in the format used by default on
        // the database connection and use that format to create the Carbon object
        // that is returned back out to the developers after we convert it here.
        return Carbon::createFromFormat($this->getDateFormat(), $value);
    }

}
