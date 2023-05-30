//#define alloca 1
//#define alloca "Link"
//#define alloca(size)   __builtin_alloca (size)
//#define alloca(size)   __builtin_alloca (size)
//#define CAIRO_TAG_LINK "Link"
//#define TEST_NUMBER 1
//#define TEST_EXP 1+2
// size, foo, bar
#define CAIRO_VERSION_ENCODE(major, minor, micro) (	\
	  ((major) * 10000)				\
	+ ((minor) *   100)				\
	+ ((micro) *     1))
