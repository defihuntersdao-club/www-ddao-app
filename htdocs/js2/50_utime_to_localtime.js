function utime_to_localtime(t)
{
    t *= 1000;
    dateObject = new Date(t);
    humanDateFormat = dateObject.toLocaleString();
    return humanDateFormat;
}