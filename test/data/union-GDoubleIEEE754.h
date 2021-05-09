union _GFloatIEEE754;
union _GDoubleIEEE754
{
  double v_double;
  struct {
    unsigned int mantissa_low : 32;
    unsigned int mantissa_high : 20;
    unsigned int biased_exponent : 11;
    unsigned int sign : 1;
  } mpn;
};
