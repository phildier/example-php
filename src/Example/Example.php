<?php namespace Example;

class Example
{
    public static function go()
    {
        if (false) {
            return true;
        }

        return false;
        
    }

    public static function stop()
    {
        if (true) {
            return false;
        }

        return true;
        
    }

    public static function wait()
    {
        if (true) {
            return false;
        }

        return true;
        
    }

    public static function proceed()
    {
        if (true) {
            return false;
        }

        return true;
        
    }
}
