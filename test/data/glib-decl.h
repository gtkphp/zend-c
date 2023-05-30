#define G_SEARCHPATH_SEPARATOR_S ":"
#define G_SEARCHPATH_SEPARATOR ':'
#define G_DIR_SEPARATOR_S "/"
#define G_DIR_SEPARATOR '/'
#define GLIB_SYSDEF_MSG_DONTROUTE 4
#define GLIB_SYSDEF_MSG_PEEK 2
#define GLIB_SYSDEF_MSG_OOB 1
#define GLIB_SYSDEF_AF_INET6 10
#define GLIB_SYSDEF_AF_INET 2
#define GLIB_SYSDEF_AF_UNIX 1
#define G_PID_FORMAT "i"
#define G_MODULE_SUFFIX "so"
#define GLIB_SYSDEF_POLLNVAL =32
#define GLIB_SYSDEF_POLLERR =8
#define GLIB_SYSDEF_POLLHUP =16
#define GLIB_SYSDEF_POLLPRI =2
#define GLIB_SYSDEF_POLLOUT =4
#define GLIB_SYSDEF_POLLIN =1
#define G_BYTE_ORDER G_LITTLE_ENDIAN
#define GSSIZE_TO_BE(val)	((gssize) GINT64_TO_BE (val))
#define GSIZE_TO_BE(val)	((gsize) GUINT64_TO_BE (val))
#define GSSIZE_TO_LE(val)	((gssize) GINT64_TO_LE (val))
#define GSIZE_TO_LE(val)	((gsize) GUINT64_TO_LE (val))
#define GUINT_TO_BE(val)	((guint) GUINT32_TO_BE (val))
#define GINT_TO_BE(val)		((gint) GINT32_TO_BE (val))
#define GUINT_TO_LE(val)	((guint) GUINT32_TO_LE (val))
#define GINT_TO_LE(val)		((gint) GINT32_TO_LE (val))
#define GULONG_TO_BE(val)	((gulong) GUINT64_TO_BE (val))
#define GLONG_TO_BE(val)	((glong) GINT64_TO_BE (val))
#define GULONG_TO_LE(val)	((gulong) GUINT64_TO_LE (val))
#define GLONG_TO_LE(val)	((glong) GINT64_TO_LE (val))
#define GUINT64_TO_BE(val)	(GUINT64_SWAP_LE_BE (val))
#define GINT64_TO_BE(val)	((gint64) GUINT64_SWAP_LE_BE (val))
#define GUINT64_TO_LE(val)	((guint64) (val))
#define GINT64_TO_LE(val)	((gint64) (val))
#define GUINT32_TO_BE(val)	(GUINT32_SWAP_LE_BE (val))
#define GINT32_TO_BE(val)	((gint32) GUINT32_SWAP_LE_BE (val))
#define GUINT32_TO_LE(val)	((guint32) (val))
#define GINT32_TO_LE(val)	((gint32) (val))
#define GUINT16_TO_BE(val)	(GUINT16_SWAP_LE_BE (val))
#define GINT16_TO_BE(val)	((gint16) GUINT16_SWAP_LE_BE (val))
#define GUINT16_TO_LE(val)	((guint16) (val))
#define GINT16_TO_LE(val)	((gint16) (val))
#define G_ATOMIC_LOCK_FREE
#define G_THREADS_IMPL_POSIX
#define G_THREADS_ENABLED
#define G_GNUC_INTERNAL __attribute__((visibility("hidden")))
#define G_HAVE_GNUC_VISIBILITY 1
#define G_HAVE_GROWING_STACK 0
#define G_HAVE_GNUC_VARARGS 1
# define G_HAVE_ISO_VARARGS 1
#define G_VA_COPY_AS_ARRAY 1
#define G_VA_COPY	va_copy
#define G_OS_UNIX
#define GLIB_MICRO_VERSION 4
#define GLIB_MINOR_VERSION 56
#define GLIB_MAJOR_VERSION 2
#define g_memmove(dest,src,len) G_STMT_START { memmove ((dest), (src), (len)); } G_STMT_END
#define g_ATEXIT(proc)	(atexit (proc))
#define G_GUINTPTR_FORMAT       "lu"
#define G_GINTPTR_FORMAT        "li"
#define G_GINTPTR_MODIFIER      "l"
#define GUINT_TO_POINTER(u)	((gpointer) (gulong) (u))
#define GINT_TO_POINTER(i)	((gpointer) (glong) (i))
#define GPOINTER_TO_UINT(p)	((guint) (gulong) (p))
#define GPOINTER_TO_INT(p)	((gint)  (glong) (p))
#define G_POLLFD_FORMAT "%d"
#define G_GOFFSET_CONSTANT(val) G_GINT64_CONSTANT(val)
#define G_GOFFSET_FORMAT        G_GINT64_FORMAT
#define G_GOFFSET_MODIFIER      G_GINT64_MODIFIER
#define G_MAXOFFSET	G_MAXINT64
#define G_MINOFFSET	G_MININT64
#define G_MAXSSIZE	G_MAXLONG
#define G_MINSSIZE	G_MINLONG
#define G_MAXSIZE	G_MAXULONG
#define G_GSSIZE_FORMAT "li"
#define G_GSIZE_FORMAT "lu"
#define G_GSSIZE_MODIFIER "l"
#define G_GSIZE_MODIFIER "l"
#define GLIB_SIZEOF_SSIZE_T 8
#define GLIB_SIZEOF_SIZE_T 8
#define GLIB_SIZEOF_LONG   8
#define GLIB_SIZEOF_VOID_P 8
#define G_GUINT64_FORMAT "lu"
#define G_GINT64_FORMAT "li"
#define G_GINT64_MODIFIER "l"
#define G_GUINT64_CONSTANT(val)	(val##UL)
#define G_GINT64_CONSTANT(val)	(val##L)
#define G_HAVE_GINT64 1          /* deprecated, always true */
#define G_GUINT32_FORMAT "u"
#define G_GINT32_FORMAT "i"
#define G_GINT32_MODIFIER ""
#define G_GUINT16_FORMAT "hu"
#define G_GINT16_FORMAT "hi"
#define G_GINT16_MODIFIER "h"
#define G_MAXULONG	ULONG_MAX
#define G_MAXLONG	LONG_MAX
#define G_MINLONG	LONG_MIN
#define G_MAXUINT	UINT_MAX
#define G_MAXINT	INT_MAX
#define G_MININT	INT_MIN
#define G_MAXUSHORT	USHRT_MAX
#define G_MAXSHORT	SHRT_MAX
#define G_MINSHORT	SHRT_MIN
#define G_MAXDOUBLE	DBL_MAX
#define G_MINDOUBLE	DBL_MIN
#define G_MAXFLOAT	FLT_MAX
#define G_MINFLOAT	FLT_MIN
#define GLIB_USING_SYSTEM_PRINTF
#define GLIB_HAVE_ALLOCA_H
#  define	G_MODULE_EXPORT		__declspec(dllexport)
#define	G_MODULE_IMPORT		extern
#define g_thread_supported()     (1)
#define G_STATIC_PRIVATE_INIT { 0 }
#define G_STATIC_RW_LOCK_INIT { G_STATIC_MUTEX_INIT, NULL, NULL, 0, FALSE, 0, 0 }
#define G_STATIC_REC_MUTEX_INIT { G_STATIC_MUTEX_INIT }
#define g_static_mutex_unlock(mutex) \
    g_mutex_unlock (g_static_mutex_get_mutex (mutex))
#define g_static_mutex_trylock(mutex) \
    g_mutex_trylock (g_static_mutex_get_mutex (mutex))
#define g_static_mutex_lock(mutex) \
    g_mutex_lock (g_static_mutex_get_mutex (mutex))
#define G_STATIC_MUTEX_INIT { NULL }
#define g_static_mutex_get_mutex g_static_mutex_get_mutex_impl
#define g_main_set_poll_func(func)  g_main_context_set_poll_func (NULL, func)
#define g_main_pending()            g_main_context_pending (NULL)
#define g_main_iteration(may_block) g_main_context_iteration (NULL, may_block)
#define g_main_is_running(loop) g_main_loop_is_running(loop)
#define g_main_destroy(loop)    g_main_loop_unref(loop)
#define g_main_quit(loop)       g_main_loop_quit(loop)
#define         g_main_run(loop)        g_main_loop_run(loop)
#define         g_main_new(is_running)  g_main_loop_new (NULL, is_running)
#define G_WIN32_HAVE_WIDECHAR_API() TRUE
#define G_WIN32_IS_NT_BASED() TRUE
#define MAXPATHLEN 1024
# define GLIB_AVAILABLE_IN_2_56                 GLIB_UNAVAILABLE(2, 56)
# define GLIB_DEPRECATED_IN_2_56_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_56                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_54                 GLIB_UNAVAILABLE(2, 54)
# define GLIB_DEPRECATED_IN_2_54_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_54                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_52                 GLIB_UNAVAILABLE(2, 52)
# define GLIB_DEPRECATED_IN_2_52_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_52                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_50                 GLIB_UNAVAILABLE(2, 50)
# define GLIB_DEPRECATED_IN_2_50_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_50                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_48                 GLIB_UNAVAILABLE(2, 48)
# define GLIB_DEPRECATED_IN_2_48_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_48                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_46                 GLIB_UNAVAILABLE(2, 46)
# define GLIB_DEPRECATED_IN_2_46_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_46                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_44                 GLIB_UNAVAILABLE(2, 44)
# define GLIB_DEPRECATED_IN_2_44_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_44                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_42                 GLIB_UNAVAILABLE(2, 42)
# define GLIB_DEPRECATED_IN_2_42_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_42                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_40                 GLIB_UNAVAILABLE(2, 40)
# define GLIB_DEPRECATED_IN_2_40_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_40                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_38                 GLIB_UNAVAILABLE(2, 38)
# define GLIB_DEPRECATED_IN_2_38_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_38                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_36                 GLIB_UNAVAILABLE(2, 36)
# define GLIB_DEPRECATED_IN_2_36_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_36                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_34                 GLIB_UNAVAILABLE(2, 34)
# define GLIB_DEPRECATED_IN_2_34_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_34                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_32                 GLIB_UNAVAILABLE(2, 32)
# define GLIB_DEPRECATED_IN_2_32_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_32                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_30                 GLIB_UNAVAILABLE(2, 30)
# define GLIB_DEPRECATED_IN_2_30_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_30                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_28                 GLIB_UNAVAILABLE(2, 28)
# define GLIB_DEPRECATED_IN_2_28_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_28                GLIB_DEPRECATED
# define GLIB_AVAILABLE_IN_2_26                 GLIB_UNAVAILABLE(2, 26)
# define GLIB_DEPRECATED_IN_2_26_FOR(f)         GLIB_DEPRECATED_FOR(f)
# define GLIB_DEPRECATED_IN_2_26                GLIB_DEPRECATED
#define GLIB_AVAILABLE_IN_ALL                   _GLIB_EXTERN
# define GLIB_VERSION_MAX_ALLOWED      (GLIB_VERSION_CUR_STABLE)
# define GLIB_VERSION_MIN_REQUIRED      (GLIB_VERSION_CUR_STABLE)
#define GLIB_VERSION_PREV_STABLE        (G_ENCODE_VERSION (GLIB_MAJOR_VERSION, GLIB_MINOR_VERSION - 1))
#define GLIB_VERSION_CUR_STABLE         (G_ENCODE_VERSION (GLIB_MAJOR_VERSION, GLIB_MINOR_VERSION + 1))
#define GLIB_VERSION_2_56       (G_ENCODE_VERSION (2, 56))
#define GLIB_VERSION_2_54       (G_ENCODE_VERSION (2, 54))
#define GLIB_VERSION_2_52       (G_ENCODE_VERSION (2, 52))
#define GLIB_VERSION_2_50       (G_ENCODE_VERSION (2, 50))
#define GLIB_VERSION_2_48       (G_ENCODE_VERSION (2, 48))
#define GLIB_VERSION_2_46       (G_ENCODE_VERSION (2, 46))
#define GLIB_VERSION_2_44       (G_ENCODE_VERSION (2, 44))
#define GLIB_VERSION_2_42       (G_ENCODE_VERSION (2, 42))
#define GLIB_VERSION_2_40       (G_ENCODE_VERSION (2, 40))
#define GLIB_VERSION_2_38       (G_ENCODE_VERSION (2, 38))
#define GLIB_VERSION_2_36       (G_ENCODE_VERSION (2, 36))
#define GLIB_VERSION_2_34       (G_ENCODE_VERSION (2, 34))
#define GLIB_VERSION_2_32       (G_ENCODE_VERSION (2, 32))
#define GLIB_VERSION_2_30       (G_ENCODE_VERSION (2, 30))
#define GLIB_VERSION_2_28       (G_ENCODE_VERSION (2, 28))
#define GLIB_VERSION_2_26       (G_ENCODE_VERSION (2, 26))
#define G_ENCODE_VERSION(major,minor)   ((major) << 16 | (minor) << 8)
#define GLIB_CHECK_VERSION(major,minor,micro)    \
    (GLIB_MAJOR_VERSION > (major) || \
     (GLIB_MAJOR_VERSION == (major) && GLIB_MINOR_VERSION > (minor)) || \
     (GLIB_MAJOR_VERSION == (major) && GLIB_MINOR_VERSION == (minor) && \
      GLIB_MICRO_VERSION >= (micro)))
# define G_VARIANT_TYPE(type_string)            (g_variant_type_checked_ ((type_string)))
#define G_VARIANT_TYPE_VARDICT              ((const GVariantType *) "a{sv}")
#define G_VARIANT_TYPE_BYTESTRING_ARRAY     ((const GVariantType *) "aay")
#define G_VARIANT_TYPE_BYTESTRING           ((const GVariantType *) "ay")
#define G_VARIANT_TYPE_OBJECT_PATH_ARRAY    ((const GVariantType *) "ao")
#define G_VARIANT_TYPE_STRING_ARRAY         ((const GVariantType *) "as")
#define G_VARIANT_TYPE_DICTIONARY           ((const GVariantType *) "a{?*}")
#define G_VARIANT_TYPE_DICT_ENTRY           ((const GVariantType *) "{?*}")
#define G_VARIANT_TYPE_TUPLE                ((const GVariantType *) "r")
#define G_VARIANT_TYPE_ARRAY                ((const GVariantType *) "a*")
#define G_VARIANT_TYPE_MAYBE                ((const GVariantType *) "m*")
#define G_VARIANT_TYPE_BASIC                ((const GVariantType *) "?")
#define G_VARIANT_TYPE_ANY                  ((const GVariantType *) "*")
#define G_VARIANT_TYPE_UNIT                 ((const GVariantType *) "()")
#define G_VARIANT_TYPE_HANDLE               ((const GVariantType *) "h")
#define G_VARIANT_TYPE_VARIANT              ((const GVariantType *) "v")
#define G_VARIANT_TYPE_SIGNATURE            ((const GVariantType *) "g")
#define G_VARIANT_TYPE_OBJECT_PATH          ((const GVariantType *) "o")
#define G_VARIANT_TYPE_STRING               ((const GVariantType *) "s")
#define G_VARIANT_TYPE_DOUBLE               ((const GVariantType *) "d")
#define G_VARIANT_TYPE_UINT64               ((const GVariantType *) "t")
#define G_VARIANT_TYPE_INT64                ((const GVariantType *) "x")
#define G_VARIANT_TYPE_UINT32               ((const GVariantType *) "u")
#define G_VARIANT_TYPE_INT32                ((const GVariantType *) "i")
#define G_VARIANT_TYPE_UINT16               ((const GVariantType *) "q")
#define G_VARIANT_TYPE_INT16                ((const GVariantType *) "n")
#define G_VARIANT_TYPE_BYTE                 ((const GVariantType *) "y")
#define G_VARIANT_TYPE_BOOLEAN              ((const GVariantType *) "b")
#define G_VARIANT_DICT_INIT(asv) { { { asv, 3488698669u, { 0, } } } }
#define G_VARIANT_BUILDER_INIT(variant_type) { { { 2942751021u, variant_type, { 0, } } } }
#define G_VARIANT_PARSE_ERROR (g_variant_parse_error_quark ())
# define G_WIN32_DLLMAIN_FOR_DLL_NAME(static, dll_name)
#  define g_abort() abort ()
#define g_bit_storage(number)        g_bit_storage_impl(number)
#define g_bit_nth_msf(mask, nth_bit) g_bit_nth_msf_impl(mask, nth_bit)
#define g_bit_nth_lsf(mask, nth_bit) g_bit_nth_lsf_impl(mask, nth_bit)
#define ATEXIT(proc) g_ATEXIT(proc)
#    define G_VA_COPY(ap1, ap2)	  (*(ap1) = *(ap2))
#define G_URI_RESERVED_CHARS_ALLOWED_IN_USERINFO G_URI_RESERVED_CHARS_SUBCOMPONENT_DELIMITERS ":"
#define G_URI_RESERVED_CHARS_ALLOWED_IN_PATH G_URI_RESERVED_CHARS_ALLOWED_IN_PATH_ELEMENT "/"
#define G_URI_RESERVED_CHARS_ALLOWED_IN_PATH_ELEMENT G_URI_RESERVED_CHARS_SUBCOMPONENT_DELIMITERS ":@"
#define G_URI_RESERVED_CHARS_SUBCOMPONENT_DELIMITERS "!$&'()*+,;="
#define G_URI_RESERVED_CHARS_GENERIC_DELIMITERS ":/?#[]@"
#define g_utf8_next_char(p) (char *)((p) + g_utf8_skip[*(const guchar *)(p)])
#define G_UNICHAR_MAX_DECOMPOSITION_LENGTH 18 /* codepoints */
#define G_UNICODE_COMBINING_MARK G_UNICODE_SPACING_MARK
#      define GLIB_VAR extern
#define G_LOG_2_BASE_10		(0.30102999566398119521)
#define G_IEEE754_DOUBLE_BIAS	(1023)
#define G_IEEE754_FLOAT_BIAS	(127)
#define g_size_checked_mul(dest, a, b) \
    _GLIB_CHECKED_MUL_U64(dest, a, b)
#define g_size_checked_add(dest, a, b) \
    _GLIB_CHECKED_ADD_U64(dest, a, b)
#define g_uint64_checked_mul(dest, a, b) \
    _GLIB_CHECKED_MUL_U64(dest, a, b)
#define g_uint64_checked_add(dest, a, b) \
    _GLIB_CHECKED_ADD_U64(dest, a, b)
#define g_uint_checked_mul(dest, a, b) \
    _GLIB_CHECKED_MUL_U32(dest, a, b)
#define g_uint_checked_add(dest, a, b) \
    _GLIB_CHECKED_ADD_U32(dest, a, b)
#define g_htons(val) (GUINT16_TO_BE (val))
#define g_htonl(val) (GUINT32_TO_BE (val))
#define g_ntohs(val) (GUINT16_FROM_BE (val))
#define g_ntohl(val) (GUINT32_FROM_BE (val))
#define GSSIZE_FROM_BE(val)	(GSSIZE_TO_BE (val))
#define GSIZE_FROM_BE(val)	(GSIZE_TO_BE (val))
#define GSSIZE_FROM_LE(val)	(GSSIZE_TO_LE (val))
#define GSIZE_FROM_LE(val)	(GSIZE_TO_LE (val))
#define GUINT_FROM_BE(val)	(GUINT_TO_BE (val))
#define GINT_FROM_BE(val)	(GINT_TO_BE (val))
#define GUINT_FROM_LE(val)	(GUINT_TO_LE (val))
#define GINT_FROM_LE(val)	(GINT_TO_LE (val))
#define GULONG_FROM_BE(val)	(GULONG_TO_BE (val))
#define GLONG_FROM_BE(val)	(GLONG_TO_BE (val))
#define GULONG_FROM_LE(val)	(GULONG_TO_LE (val))
#define GLONG_FROM_LE(val)	(GLONG_TO_LE (val))
#define GUINT64_FROM_BE(val)	(GUINT64_TO_BE (val))
#define GINT64_FROM_BE(val)	(GINT64_TO_BE (val))
#define GUINT64_FROM_LE(val)	(GUINT64_TO_LE (val))
#define GINT64_FROM_LE(val)	(GINT64_TO_LE (val))
#define GUINT32_FROM_BE(val)	(GUINT32_TO_BE (val))
#define GINT32_FROM_BE(val)	(GINT32_TO_BE (val))
#define GUINT32_FROM_LE(val)	(GUINT32_TO_LE (val))
#define GINT32_FROM_LE(val)	(GINT32_TO_LE (val))
#define GUINT16_FROM_BE(val)	(GUINT16_TO_BE (val))
#define GINT16_FROM_BE(val)	(GINT16_TO_BE (val))
#define GUINT16_FROM_LE(val)	(GUINT16_TO_LE (val))
#define GINT16_FROM_LE(val)	(GINT16_TO_LE (val))
#define GUINT32_SWAP_BE_PDP(val)	((guint32) ( \
    (((guint32) (val) & (guint32) 0x00ff00ffU) << 8) | \
    (((guint32) (val) & (guint32) 0xff00ff00U) >> 8)))
#define GUINT32_SWAP_LE_PDP(val)	((guint32) ( \
    (((guint32) (val) & (guint32) 0x0000ffffU) << 16) | \
    (((guint32) (val) & (guint32) 0xffff0000U) >> 16)))
#define GUINT16_SWAP_BE_PDP(val)	(GUINT16_SWAP_LE_BE (val))
#define GUINT16_SWAP_LE_PDP(val)	((guint16) (val))
#    define GUINT64_SWAP_LE_BE_X86_64(val) \
       (G_GNUC_EXTENSION					\
	({ guint64 __v, __x = ((guint64) (val));		\
	   if (__builtin_constant_p (__x))			\
	     __v = GUINT64_SWAP_LE_BE_CONSTANT (__x);		\
	   else							\
	     __asm__ ("bswapq %0"				\
		      : "=r" (__v)				\
		      : "0" (__x));				\
	   __v; }))
#    define GUINT32_SWAP_LE_BE_X86_64(val) \
       (G_GNUC_EXTENSION					\
	 ({ guint32 __v, __x = ((guint32) (val));		\
	    if (__builtin_constant_p (__x))			\
	      __v = GUINT32_SWAP_LE_BE_CONSTANT (__x);		\
	    else						\
	     __asm__ ("bswapl %0"				\
		      : "=r" (__v)				\
		      : "0" (__x));				\
	    __v; }))
#    define GUINT64_SWAP_LE_BE_IA64(val) \
       (G_GNUC_EXTENSION					\
	({ guint64 __v, __x = ((guint64) (val));		\
	   if (__builtin_constant_p (__x))			\
	     __v = GUINT64_SWAP_LE_BE_CONSTANT (__x);		\
	   else							\
	     __asm__ __volatile__ ("mux1 %0 = %1, @rev ;;"	\
				   : "=r" (__v)			\
				   : "r" (__x));		\
	   __v; }))
#    define GUINT32_SWAP_LE_BE_IA64(val) \
       (G_GNUC_EXTENSION					\
	 ({ guint32 __v, __x = ((guint32) (val));		\
	    if (__builtin_constant_p (__x))			\
	      __v = GUINT32_SWAP_LE_BE_CONSTANT (__x);		\
	    else						\
	     __asm__ __volatile__ ("shl %0 = %1, 32 ;;"		\
				   "mux1 %0 = %0, @rev ;;"	\
				    : "=r" (__v)		\
				    : "r" (__x));		\
	    __v; }))
#    define GUINT16_SWAP_LE_BE_IA64(val) \
       (G_GNUC_EXTENSION					\
	({ guint16 __v, __x = ((guint16) (val));		\
	   if (__builtin_constant_p (__x))			\
	     __v = GUINT16_SWAP_LE_BE_CONSTANT (__x);		\
	   else							\
	     __asm__ __volatile__ ("shl %0 = %1, 48 ;;"		\
				   "mux1 %0 = %0, @rev ;;"	\
				    : "=r" (__v)		\
				    : "r" (__x));		\
	    __v; }))
#    define GUINT16_SWAP_LE_BE(val) (GUINT16_SWAP_LE_BE_IA32 (val))
#    define GUINT64_SWAP_LE_BE_IA32(val) \
       (G_GNUC_EXTENSION						\
	({ union { guint64 __ll;					\
		   guint32 __l[2]; } __w, __r;				\
	   __w.__ll = ((guint64) (val));				\
	   if (__builtin_constant_p (__w.__ll))				\
	     __r.__ll = GUINT64_SWAP_LE_BE_CONSTANT (__w.__ll);		\
	   else								\
	     {								\
	       __r.__l[0] = GUINT32_SWAP_LE_BE (__w.__l[1]);		\
	       __r.__l[1] = GUINT32_SWAP_LE_BE (__w.__l[0]);		\
	     }								\
	   __r.__ll; }))
#       define GUINT32_SWAP_LE_BE_IA32(val) \
	  (G_GNUC_EXTENSION					\
	   ({ guint32 __v, __x = ((guint32) (val));		\
	      if (__builtin_constant_p (__x))			\
		__v = GUINT32_SWAP_LE_BE_CONSTANT (__x);	\
	      else						\
		__asm__ ("rorw $8, %w0\n\t"			\
			 "rorl $16, %0\n\t"			\
			 "rorw $8, %w0"				\
			 : "=r" (__v)				\
			 : "0" (__x)				\
			 : "cc");				\
	      __v; }))
#    define GUINT16_SWAP_LE_BE_IA32(val) \
       (G_GNUC_EXTENSION					\
	({ guint16 __v, __x = ((guint16) (val));		\
	   if (__builtin_constant_p (__x))			\
	     __v = GUINT16_SWAP_LE_BE_CONSTANT (__x);		\
	   else							\
	     __asm__ ("rorw $8, %w0"				\
		      : "=r" (__v)				\
		      : "0" (__x)				\
		      : "cc");					\
	    __v; }))
#    define GUINT64_SWAP_LE_BE(val) ((guint64) __builtin_bswap64 ((guint64) (val)))
#    define GUINT32_SWAP_LE_BE(val) ((guint32) __builtin_bswap32 ((guint32) (val)))
#define GUINT64_SWAP_LE_BE_CONSTANT(val)	((guint64) ( \
      (((guint64) (val) &						\
	(guint64) G_GINT64_CONSTANT (0x00000000000000ffU)) << 56) |	\
      (((guint64) (val) &						\
	(guint64) G_GINT64_CONSTANT (0x000000000000ff00U)) << 40) |	\
      (((guint64) (val) &						\
	(guint64) G_GINT64_CONSTANT (0x0000000000ff0000U)) << 24) |	\
      (((guint64) (val) &						\
	(guint64) G_GINT64_CONSTANT (0x00000000ff000000U)) <<  8) |	\
      (((guint64) (val) &						\
	(guint64) G_GINT64_CONSTANT (0x000000ff00000000U)) >>  8) |	\
      (((guint64) (val) &						\
	(guint64) G_GINT64_CONSTANT (0x0000ff0000000000U)) >> 24) |	\
      (((guint64) (val) &						\
	(guint64) G_GINT64_CONSTANT (0x00ff000000000000U)) >> 40) |	\
      (((guint64) (val) &						\
	(guint64) G_GINT64_CONSTANT (0xff00000000000000U)) >> 56)))
#define GUINT32_SWAP_LE_BE_CONSTANT(val)	((guint32) ( \
    (((guint32) (val) & (guint32) 0x000000ffU) << 24) | \
    (((guint32) (val) & (guint32) 0x0000ff00U) <<  8) | \
    (((guint32) (val) & (guint32) 0x00ff0000U) >>  8) | \
    (((guint32) (val) & (guint32) 0xff000000U) >> 24)))
#define GUINT16_SWAP_LE_BE_CONSTANT(val)	((guint16) ( \
    (guint16) ((guint16) (val) >> 8) |	\
    (guint16) ((guint16) (val) << 8)))
#define G_PDP_ENDIAN    3412		/* unused, need specific PDP check */
#define G_BIG_ENDIAN    4321
#define G_LITTLE_ENDIAN 1234
#define G_SQRT2 1.4142135623730950488016887242096980785696718753769
#define G_PI_4  0.78539816339744830961566084581987572104929234984378
#define G_PI_2  1.5707963267948966192313216916397514420985846996876
#define G_PI    3.1415926535897932384626433832795028841971693993751
#define G_LN10  2.3025850929940456840179914546843642076011014886288
#define G_LN2   0.69314718055994530941723212145817656807550013436026
#define G_E     2.7182818284590452353602874713526624977572470937000
#define G_MAXUINT64	G_GUINT64_CONSTANT(0xffffffffffffffff)
#define G_MAXINT64	G_GINT64_CONSTANT(0x7fffffffffffffff)
#define G_MININT64	((gint64) G_GINT64_CONSTANT(-0x8000000000000000))
#define G_MAXUINT32	((guint32) 0xffffffff)
#define G_MAXINT32	((gint32)  0x7fffffff)
#define G_MININT32	((gint32) -0x80000000)
#define G_MAXUINT16	((guint16) 0xffff)
#define G_MAXINT16	((gint16)  0x7fff)
#define G_MININT16	((gint16) -0x8000)
#define G_MAXUINT8	((guint8) 0xff)
#define G_MAXINT8	((gint8)  0x7f)
#define G_MININT8	((gint8) -0x80)
#define G_USEC_PER_SEC 1000000
# define g_once(once, func, arg) g_once_impl ((once), (func), (arg))
#  define G_TRYLOCK(name)                                       \
      (g_log (G_LOG_DOMAIN, G_LOG_LEVEL_DEBUG,                  \
             "file %s: line %d (%s): try locking: %s ",         \
             __FILE__,        __LINE__, G_STRFUNC,              \
             #name), g_mutex_trylock (&G_LOCK_NAME (name)))
#  define G_UNLOCK(name)              G_STMT_START{             \
      g_log (G_LOG_DOMAIN, G_LOG_LEVEL_DEBUG,                   \
             "file %s: line %d (%s): unlocking: %s ",           \
             __FILE__,        __LINE__, G_STRFUNC,              \
             #name);                                            \
     g_mutex_unlock (&G_LOCK_NAME (name));                      \
   }G_STMT_END
#  define G_LOCK(name)                G_STMT_START{             \
      g_log (G_LOG_DOMAIN, G_LOG_LEVEL_DEBUG,                   \
             "file %s: line %d (%s): locking: %s ",             \
             __FILE__,        __LINE__, G_STRFUNC,              \
             #name);                                            \
      g_mutex_lock (&G_LOCK_NAME (name));                       \
   }G_STMT_END
#define G_LOCK_EXTERN(name)           extern GMutex G_LOCK_NAME (name)
#define G_LOCK_DEFINE(name)           GMutex G_LOCK_NAME (name)
#define G_LOCK_DEFINE_STATIC(name)    static G_LOCK_DEFINE (name)
#define G_LOCK_NAME(name)             g__ ## name ## _lock
#define G_ONCE_INIT { G_ONCE_STATUS_NOTCALLED, NULL }
#define G_PRIVATE_INIT(notify) { NULL, (notify), { NULL, NULL } }
#define G_THREAD_ERROR g_thread_error_quark ()
#define g_test_assert_expected_messages() g_test_assert_expected_messages_internal (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC)
#define  g_test_rand_bit()              (0 != (g_test_rand_int() & (1 << 15)))
#define  g_test_trap_assert_stderr_unmatched(serrpattern) g_test_trap_assertions (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, 5, serrpattern)
#define  g_test_trap_assert_stderr(serrpattern)           g_test_trap_assertions (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, 4, serrpattern)
#define  g_test_trap_assert_stdout_unmatched(soutpattern) g_test_trap_assertions (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, 3, soutpattern)
#define  g_test_trap_assert_stdout(soutpattern)           g_test_trap_assertions (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, 2, soutpattern)
#define  g_test_trap_assert_failed()                      g_test_trap_assertions (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, 1, 0)
#define  g_test_trap_assert_passed()                      g_test_trap_assertions (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, 0, 0)
#define g_test_queue_unref(gobject)     g_test_queue_destroy (g_object_unref, gobject)
#define g_test_add(testpath, Fixture, tdata, fsetup, ftest, fteardown) \
					G_STMT_START {			\
                                         void (*add_vtable) (const char*,       \
                                                    gsize,             \
                                                    gconstpointer,     \
                                                    void (*) (Fixture*, gconstpointer),   \
                                                    void (*) (Fixture*, gconstpointer),   \
                                                    void (*) (Fixture*, gconstpointer)) =  (void (*) (const gchar *, gsize, gconstpointer, void (*) (Fixture*, gconstpointer), void (*) (Fixture*, gconstpointer), void (*) (Fixture*, gconstpointer))) g_test_add_vtable; \
                                         add_vtable \
                                          (testpath, sizeof (Fixture), tdata, fsetup, ftest, fteardown); \
					} G_STMT_END
#define g_test_undefined()              (g_test_config_vars->test_undefined)
#define g_test_quiet()                  (g_test_config_vars->test_quiet)
#define g_test_verbose()                (g_test_config_vars->test_verbose)
#define g_test_perf()                   (g_test_config_vars->test_perf)
#define g_test_thorough()               (!g_test_config_vars->test_quick)
#define g_test_slow()                   (!g_test_config_vars->test_quick)
#define g_test_quick()                  (g_test_config_vars->test_quick)
#define g_test_initialized()            (g_test_config_vars->test_initialized)
#define g_assert(expr)                  G_STMT_START { (void) 0; } G_STMT_END
#define g_assert_not_reached()          G_STMT_START { (void) 0; } G_STMT_END
#define g_assert_nonnull(expr)          G_STMT_START { \
                                             if G_LIKELY ((expr) != NULL) ; else \
                                               g_assertion_message (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                                    "'" #expr "' should not be NULL"); \
                                        } G_STMT_END
#define g_assert_null(expr)             G_STMT_START { if G_LIKELY ((expr) == NULL) ; else \
                                               g_assertion_message (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                                    "'" #expr "' should be NULL"); \
                                        } G_STMT_END
#define g_assert_false(expr)            G_STMT_START { \
                                             if G_LIKELY (!(expr)) ; else \
                                               g_assertion_message (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                                    "'" #expr "' should be FALSE"); \
                                        } G_STMT_END
#define g_assert_true(expr)             G_STMT_START { \
                                             if G_LIKELY (expr) ; else \
                                               g_assertion_message (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                                    "'" #expr "' should be TRUE"); \
                                        } G_STMT_END
#define g_assert_error(err, dom, c)     G_STMT_START { \
                                               if (!err || (err)->domain != dom || (err)->code != c) \
                                               g_assertion_message_error (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                 #err, err, dom, c); \
                                        } G_STMT_END
#define g_assert_no_error(err)          G_STMT_START { \
                                             if (err) \
                                               g_assertion_message_error (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                 #err, err, 0, 0); \
                                        } G_STMT_END
#define g_assert_cmpmem(m1, l1, m2, l2) G_STMT_START {\
                                             gconstpointer __m1 = m1, __m2 = m2; \
                                             int __l1 = l1, __l2 = l2; \
                                             if (__l1 != __l2) \
                                               g_assertion_message_cmpnum (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                                           #l1 " (len(" #m1 ")) == " #l2 " (len(" #m2 "))", \
                                                                           (long double) __l1, "==", (long double) __l2, 'i'); \
                                             else if (__l1 != 0 && memcmp (__m1, __m2, __l1) != 0) \
                                               g_assertion_message (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                                    "assertion failed (" #m1 " == " #m2 ")"); \
                                        } G_STMT_END
#define g_assert_cmpfloat(n1,cmp,n2)    G_STMT_START { \
                                             long double __n1 = (n1), __n2 = (n2); \
                                             if (__n1 cmp __n2) ; else \
                                               g_assertion_message_cmpnum (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                 #n1 " " #cmp " " #n2, (long double) __n1, #cmp, (long double) __n2, 'f'); \
                                        } G_STMT_END
#define g_assert_cmphex(n1, cmp, n2)    G_STMT_START {\
                                             guint64 __n1 = (n1), __n2 = (n2); \
                                             if (__n1 cmp __n2) ; else \
                                               g_assertion_message_cmpnum (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                 #n1 " " #cmp " " #n2, (long double) __n1, #cmp, (long double) __n2, 'x'); \
                                        } G_STMT_END
#define g_assert_cmpuint(n1, cmp, n2)   G_STMT_START { \
                                             guint64 __n1 = (n1), __n2 = (n2); \
                                             if (__n1 cmp __n2) ; else \
                                               g_assertion_message_cmpnum (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                 #n1 " " #cmp " " #n2, (long double) __n1, #cmp, (long double) __n2, 'i'); \
                                        } G_STMT_END
#define g_assert_cmpint(n1, cmp, n2)    G_STMT_START { \
                                             gint64 __n1 = (n1), __n2 = (n2); \
                                             if (__n1 cmp __n2) ; else \
                                               g_assertion_message_cmpnum (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                 #n1 " " #cmp " " #n2, (long double) __n1, #cmp, (long double) __n2, 'i'); \
                                        } G_STMT_END
#define g_assert_cmpstr(s1, cmp, s2)    G_STMT_START { \
                                             const char *__s1 = (s1), *__s2 = (s2); \
                                             if (g_strcmp0 (__s1, __s2) cmp 0) ; else \
                                               g_assertion_message_cmpstr (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, \
                                                 #s1 " " #cmp " " #s2, __s1, #cmp, __s2); \
                                        } G_STMT_END
#define  g_string_sprintfa g_string_append_printf
#define  g_string_sprintf  g_string_printf
#define G_NUMBER_PARSER_ERROR (g_number_parser_error_quark ())
#define g_strstrip( string )	g_strchomp (g_strchug (string))
#define G_ASCII_DTOSTR_BUF_SIZE (29 + 10)
#define	 G_STR_DELIMITERS	"_-|> <."
#define g_ascii_isxdigit(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_XDIGIT) != 0)
#define g_ascii_isupper(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_UPPER) != 0)
#define g_ascii_isspace(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_SPACE) != 0)
#define g_ascii_ispunct(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_PUNCT) != 0)
#define g_ascii_isprint(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_PRINT) != 0)
#define g_ascii_islower(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_LOWER) != 0)
#define g_ascii_isgraph(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_GRAPH) != 0)
#define g_ascii_isdigit(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_DIGIT) != 0)
#define g_ascii_iscntrl(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_CNTRL) != 0)
#define g_ascii_isalpha(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_ALPHA) != 0)
#define g_ascii_isalnum(c) \
  ((g_ascii_table[(guchar) (c)] & G_ASCII_ALNUM) != 0)
#define G_SPAWN_EXIT_ERROR g_spawn_exit_error_quark ()
#define G_SPAWN_ERROR g_spawn_error_quark ()
#define  g_slist_next(slist)	         ((slist) ? (((GSList *)(slist))->next) : NULL)
#define	 g_slist_free1		         g_slist_free_1
#define g_slice_free_chain(type, mem_chain, next)               \
G_STMT_START {                                                  \
  if (1) g_slice_free_chain_with_offset (sizeof (type),		\
                 (mem_chain), G_STRUCT_OFFSET (type, next)); 	\
  else   (void) ((type*) 0 == (mem_chain));			\
} G_STMT_END
#define g_slice_free(type, mem)                                 \
G_STMT_START {                                                  \
  if (1) g_slice_free1 (sizeof (type), (mem));			\
  else   (void) ((type*) 0 == (mem)); 				\
} G_STMT_END
#define g_slice_dup(type, mem)                                  \
  (1 ? (type*) g_slice_copy (sizeof (type), (mem))              \
     : ((void) ((type*) 0 == (mem)), (type*) 0))
#define  g_slice_new0(type)     ((type*) g_slice_alloc0 (sizeof (type)))
#define  g_slice_new(type)      ((type*) g_slice_alloc (sizeof (type)))
#define G_SHELL_ERROR g_shell_error_quark ()
#define g_scanner_thaw_symbol_table(scanner) ((void)0)
#define g_scanner_freeze_symbol_table(scanner) ((void)0)
#define		g_scanner_foreach_symbol( scanner, func, data )	G_STMT_START { \
  g_scanner_scope_foreach_symbol ((scanner), 0, (func), (data)); \
} G_STMT_END
#define		g_scanner_remove_symbol( scanner, symbol )	G_STMT_START { \
  g_scanner_scope_remove_symbol ((scanner), 0, (symbol)); \
} G_STMT_END
#define		g_scanner_add_symbol( scanner, symbol, value )	G_STMT_START { \
  g_scanner_scope_add_symbol ((scanner), 0, (symbol), (value)); \
} G_STMT_END
#define G_CSET_LATINS	"\337\340\341\342\343\344\345\346"\
			"\347\350\351\352\353\354\355\356\357\360"\
			"\361\362\363\364\365\366"\
			"\370\371\372\373\374\375\376\377"
#define G_CSET_LATINC	"\300\301\302\303\304\305\306"\
			"\307\310\311\312\313\314\315\316\317\320"\
			"\321\322\323\324\325\326"\
			"\330\331\332\333\334\335\336"
#define G_CSET_DIGITS	"0123456789"
#define G_CSET_a_2_z	"abcdefghijklmnopqrstuvwxyz"
#define G_CSET_A_2_Z	"ABCDEFGHIJKLMNOPQRSTUVWXYZ"
#define G_REGEX_ERROR g_regex_error_quark ()
#define g_random_boolean() ((g_random_int () & (1 << 15)) != 0)
#define g_rand_boolean(rand_) ((g_rand_int (rand_) & (1 << 15)) != 0)
#define G_QUEUE_INIT { NULL, NULL, 0 }
#define G_DEFINE_QUARK(QN, q_n)                                         \
GQuark                                                                  \
q_n##_quark (void)                                                      \
{                                                                       \
  static GQuark q;                                                      \
                                                                        \
  if G_UNLIKELY (q == 0)                                                \
    q = g_quark_from_static_string (#QN);                               \
                                                                        \
  return q;                                                             \
}
#define G_OPTION_REMAINING ""
#define G_OPTION_ERROR (g_option_error_quark ())
#define	 g_node_first_child(node)	((node) ? \
					 ((GNode*) (node))->children : NULL)
#define	 g_node_next_sibling(node)	((node) ? \
					 ((GNode*) (node))->next : NULL)
#define	 g_node_prev_sibling(node)	((node) ? \
					 ((GNode*) (node))->prev : NULL)
#define	g_node_append_data(parent, data)			\
     g_node_insert_before ((parent), NULL, g_node_new (data))
#define	g_node_prepend_data(parent, data)			\
     g_node_prepend ((parent), g_node_new (data))
#define	g_node_insert_data_before(parent, sibling, data)	\
     g_node_insert_before ((parent), (sibling), g_node_new (data))
#define	g_node_insert_data_after(parent, sibling, data)	\
     g_node_insert_after ((parent), (sibling), g_node_new (data))
#define	g_node_insert_data(parent, position, data)		\
     g_node_insert ((parent), (position), g_node_new (data))
#define g_node_append(parent, node)				\
     g_node_insert_before ((parent), NULL, (node))
#define	 G_NODE_IS_LEAF(node)	(((GNode*) (node))->children == NULL)
#define	 G_NODE_IS_ROOT(node)	(((GNode*) (node))->parent == NULL && \
				 ((GNode*) (node))->prev == NULL && \
				 ((GNode*) (node))->next == NULL)
#define g_return_val_if_reached(val) G_STMT_START{ return (val); }G_STMT_END
#define g_return_if_reached() G_STMT_START{ return; }G_STMT_END
#define g_return_val_if_fail(expr,val) G_STMT_START{ (void)0; }G_STMT_END
#define g_return_if_fail(expr) G_STMT_START{ (void)0; }G_STMT_END
#define g_warn_if_fail(expr) \
  do { \
    if G_LIKELY (expr) ; \
    else g_warn_message (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, #expr); \
  } while (0)
#define g_warn_if_reached() \
  do { \
    g_warn_message (G_LOG_DOMAIN, __FILE__, __LINE__, G_STRFUNC, NULL); \
  } while (0)
#define g_debug(...)    g_log_structured_standard (G_LOG_DOMAIN, G_LOG_LEVEL_DEBUG, \
                                                   __FILE__, G_STRINGIFY (__LINE__), \
                                                   G_STRFUNC, __VA_ARGS__)
#define g_info(...)     g_log_structured_standard (G_LOG_DOMAIN, G_LOG_LEVEL_INFO, \
                                                   __FILE__, G_STRINGIFY (__LINE__), \
                                                   G_STRFUNC, __VA_ARGS__)
#define g_warning(...)  g_log_structured_standard (G_LOG_DOMAIN, G_LOG_LEVEL_WARNING, \
                                                   __FILE__, G_STRINGIFY (__LINE__), \
                                                   G_STRFUNC, __VA_ARGS__)
#define g_critical(...) g_log_structured_standard (G_LOG_DOMAIN, G_LOG_LEVEL_CRITICAL, \
                                                   __FILE__, G_STRINGIFY (__LINE__), \
                                                   G_STRFUNC, __VA_ARGS__)
#define g_message(...)  g_log_structured_standard (G_LOG_DOMAIN, G_LOG_LEVEL_MESSAGE, \
                                                   __FILE__, G_STRINGIFY (__LINE__), \
                                                   G_STRFUNC, __VA_ARGS__)
#define g_error(...)  G_STMT_START {                                            \
                        g_log_structured_standard (G_LOG_DOMAIN, G_LOG_LEVEL_ERROR, \
                                                   __FILE__, G_STRINGIFY (__LINE__), \
                                                   G_STRFUNC, __VA_ARGS__); \
                        for (;;) ;                                              \
                      } G_STMT_END
#define G_LOG_DOMAIN    ((gchar*) 0)
#define G_DEBUG_HERE()                                          \
  g_log_structured (G_LOG_DOMAIN, G_LOG_LEVEL_DEBUG,            \
                    "CODE_FILE", __FILE__,                      \
                    "CODE_LINE", G_STRINGIFY (__LINE__),        \
                    "CODE_FUNC", G_STRFUNC,                      \
                    "MESSAGE", "%" G_GINT64_FORMAT ": %s",      \
                    g_get_monotonic_time (), G_STRLOC)
#define G_LOG_FATAL_MASK        (G_LOG_FLAG_RECURSION | G_LOG_LEVEL_ERROR)
#define G_LOG_LEVEL_USER_SHIFT  (8)
#define g_try_renew(struct_type, mem, n_structs)	_G_RENEW (struct_type, mem, n_structs, try_realloc)
#define g_try_new0(struct_type, n_structs)		_G_NEW (struct_type, n_structs, try_malloc0)
#define g_try_new(struct_type, n_structs)		_G_NEW (struct_type, n_structs, try_malloc)
#define g_renew(struct_type, mem, n_structs)		_G_RENEW (struct_type, mem, n_structs, realloc)
#define g_new0(struct_type, n_structs)			_G_NEW (struct_type, n_structs, malloc0)
#define g_new(struct_type, n_structs)			_G_NEW (struct_type, n_structs, malloc)
#  define G_MEM_ALIGN	GLIB_SIZEOF_VOID_P
#define G_MARKUP_ERROR g_markup_error_quark ()
#define G_SOURCE_CONTINUE       TRUE
#define G_SOURCE_REMOVE         FALSE
#define G_PRIORITY_LOW              300
#define G_PRIORITY_DEFAULT_IDLE     200
#define G_PRIORITY_HIGH_IDLE        100
#define G_PRIORITY_DEFAULT          0
#define G_PRIORITY_HIGH            -100
#define g_autofree _GLIB_CLEANUP(g_autoptr_cleanup_generic_gfree)
#define g_auto(TypeName) _GLIB_CLEANUP(_GLIB_AUTO_FUNC_NAME(TypeName)) TypeName
#define g_autoslist(TypeName) _GLIB_CLEANUP(_GLIB_AUTOPTR_SLIST_FUNC_NAME(TypeName)) _GLIB_AUTOPTR_SLIST_TYPENAME(TypeName)
#define g_autolist(TypeName) _GLIB_CLEANUP(_GLIB_AUTOPTR_LIST_FUNC_NAME(TypeName)) _GLIB_AUTOPTR_LIST_TYPENAME(TypeName)
#define g_autoptr(TypeName) _GLIB_CLEANUP(_GLIB_AUTOPTR_FUNC_NAME(TypeName)) _GLIB_AUTOPTR_TYPENAME(TypeName)
#define G_DEFINE_AUTO_CLEANUP_FREE_FUNC(TypeName, func, none) \
  G_GNUC_BEGIN_IGNORE_DEPRECATIONS                                                                              \
  static inline void _GLIB_AUTO_FUNC_NAME(TypeName) (TypeName *_ptr) { if (*_ptr != none) (func) (*_ptr); }     \
  G_GNUC_END_IGNORE_DEPRECATIONS
#define G_DEFINE_AUTO_CLEANUP_CLEAR_FUNC(TypeName, func) \
  G_GNUC_BEGIN_IGNORE_DEPRECATIONS                                                                              \
  static inline void _GLIB_AUTO_FUNC_NAME(TypeName) (TypeName *_ptr) { (func) (_ptr); }                         \
  G_GNUC_END_IGNORE_DEPRECATIONS
#define G_DEFINE_AUTOPTR_CLEANUP_FUNC(TypeName, func) \
  typedef TypeName *_GLIB_AUTOPTR_TYPENAME(TypeName);                                                           \
  typedef GList *_GLIB_AUTOPTR_LIST_TYPENAME(TypeName);                                                         \
  typedef GSList *_GLIB_AUTOPTR_SLIST_TYPENAME(TypeName);                                                         \
  G_GNUC_BEGIN_IGNORE_DEPRECATIONS                                                                              \
  static inline void _GLIB_AUTOPTR_FUNC_NAME(TypeName) (TypeName **_ptr) { if (*_ptr) (func) (*_ptr); }         \
  static inline void _GLIB_AUTOPTR_LIST_FUNC_NAME(TypeName) (GList **_l) { g_list_free_full (*_l, (GDestroyNotify) func); } \
  static inline void _GLIB_AUTOPTR_SLIST_FUNC_NAME(TypeName) (GSList **_l) { g_slist_free_full (*_l, (GDestroyNotify) func); } \
  G_GNUC_END_IGNORE_DEPRECATIONS
#define GLIB_UNAVAILABLE(maj,min) _GLIB_EXTERN
#define GLIB_DEPRECATED_FOR(f) _GLIB_EXTERN
#define GLIB_DEPRECATED _GLIB_EXTERN
#define G_UNAVAILABLE(maj,min) __attribute__((deprecated("Not available before " #maj "." #min)))
#define G_DEPRECATED_FOR(f) __attribute__((__deprecated__("Use '" #f "' instead")))
#define G_DEPRECATED __attribute__((__deprecated__))
#define G_UNLIKELY(expr) (__builtin_expect (_G_BOOLEAN_EXPR((expr)), 0))
#define G_LIKELY(expr) (__builtin_expect (_G_BOOLEAN_EXPR((expr)), 1))
#define G_CONST_RETURN
#define G_STMT_END \
    __pragma(warning(push)) \
    __pragma(warning(disable:4127)) \
    while(0) \
    __pragma(warning(pop))
#define G_STMT_START  do
#define G_STRUCT_MEMBER(member_type, struct_p, struct_offset)   \
    (*(member_type*) G_STRUCT_MEMBER_P ((struct_p), (struct_offset)))
#define G_STRUCT_MEMBER_P(struct_p, struct_offset)   \
    ((gpointer) ((guint8*) (struct_p) + (glong) (struct_offset)))
#define G_STRUCT_OFFSET(struct_type, member) \
      ((glong) offsetof (struct_type, member))
#define GSIZE_TO_POINTER(s)	((gpointer) (gsize) (s))
#define GPOINTER_TO_SIZE(p)	((gsize) (p))
#define G_N_ELEMENTS(arr)		(sizeof (arr) / sizeof ((arr)[0]))
#define CLAMP(x, low, high)  (((x) > (high)) ? (high) : (((x) < (low)) ? (low) : (x)))
#define ABS(a)	   (((a) < 0) ? -(a) : (a))
#define MIN(a, b)  (((a) < (b)) ? (a) : (b))
#define MAX(a, b)  (((a) > (b)) ? (a) : (b))
#define	TRUE	(!FALSE)
#define	FALSE	(0)
#  define NULL        (0L)
#define G_END_DECLS    }
#define G_BEGIN_DECLS  extern "C" {
#define G_STRFUNC     ((const char*) (__PRETTY_FUNCTION__))
#define G_STRLOC	__FILE__ ":" G_STRINGIFY (__LINE__) ":" __PRETTY_FUNCTION__ "()"
#define G_STATIC_ASSERT_EXPR(expr) ((void) sizeof (char[(expr) ? 1 : -1]))
#define G_STATIC_ASSERT(expr) typedef char G_PASTE (_GStaticAssertCompileTimeAssertion_, __COUNTER__)[(expr) ? 1 : -1] G_GNUC_UNUSED
#define G_PASTE(identifier1,identifier2)      G_PASTE_ARGS (identifier1, identifier2)
#define G_PASTE_ARGS(identifier1,identifier2) identifier1 ## identifier2
#define	G_STRINGIFY_ARG(contents)	#contents
#define G_STRINGIFY(macro_or_string)	G_STRINGIFY_ARG (macro_or_string)
#define G_ANALYZER_NORETURN __attribute__((analyzer_noreturn))
#define G_ANALYZER_ANALYZING 1
#define G_GNUC_PRETTY_FUNCTION  __PRETTY_FUNCTION__
#define G_GNUC_FUNCTION         __FUNCTION__
#define G_GNUC_WARN_UNUSED_RESULT __attribute__((warn_unused_result))
#define G_GNUC_MAY_ALIAS __attribute__((may_alias))
#define G_GNUC_END_IGNORE_DEPRECATIONS			\
  _Pragma ("warning (pop)")
#define G_GNUC_BEGIN_IGNORE_DEPRECATIONS                \
  _Pragma ("warning (push)")                            \
  _Pragma ("warning (disable:1478)")
#define G_GNUC_DEPRECATED_FOR(f)                        \
  __attribute__((deprecated("Use " #f " instead")))
#define G_GNUC_DEPRECATED __attribute__((__deprecated__))
#define G_GNUC_NO_INSTRUMENT			\
  __attribute__((__no_instrument_function__))
#define G_GNUC_UNUSED                           \
  __attribute__((__unused__))
#define G_GNUC_CONST                            \
  __attribute__((__const__))
#define G_GNUC_NORETURN                         \
  __attribute__((__noreturn__))
#define G_GNUC_FORMAT( arg_idx )                \
  __attribute__((__format_arg__ (arg_idx)))
#define G_GNUC_SCANF( format_idx, arg_idx )     \
  __attribute__((__format__ (__scanf__, format_idx, arg_idx)))
#define G_GNUC_PRINTF( format_idx, arg_idx )    \
  __attribute__((__format__ (__printf__, format_idx, arg_idx)))
#define G_GNUC_ALLOC_SIZE2(x,y) __attribute__((__alloc_size__(x,y)))
#define G_GNUC_ALLOC_SIZE(x) __attribute__((__alloc_size__(x)))
#define G_GNUC_NULL_TERMINATED __attribute__((__sentinel__))
#define G_GNUC_MALLOC __attribute__((__malloc__))
#define G_GNUC_PURE __attribute__((__pure__))
#  define G_INLINE_FUNC extern
# define inline __inline
#   define G_INLINE_DEFINE_NEEDED
#define G_CAN_INLINE
#define G_GNUC_EXTENSION __extension__
#define G_GNUC_CHECK_VERSION(major, minor) \
    ((__GNUC__ > (major)) || \
     ((__GNUC__ == (major)) && \
      (__GNUC_MINOR__ >= (minor))))
#define g_list_next(list)	        ((list) ? (((GList *)(list))->next) : NULL)
#define g_list_previous(list)	        ((list) ? (((GList *)(list))->prev) : NULL)
#define  g_list_free1                   g_list_free_1
#define G_UNIX_ERROR (g_unix_error_quark())
#define G_KEY_FILE_DESKTOP_TYPE_DIRECTORY       "Directory"
#define G_KEY_FILE_DESKTOP_TYPE_LINK            "Link"
#define G_KEY_FILE_DESKTOP_TYPE_APPLICATION     "Application"
#define G_KEY_FILE_DESKTOP_KEY_ACTIONS          "Actions"
#define G_KEY_FILE_DESKTOP_KEY_DBUS_ACTIVATABLE "DBusActivatable"
#define G_KEY_FILE_DESKTOP_KEY_URL              "URL"
#define G_KEY_FILE_DESKTOP_KEY_STARTUP_WM_CLASS "StartupWMClass"
#define G_KEY_FILE_DESKTOP_KEY_STARTUP_NOTIFY   "StartupNotify"
#define G_KEY_FILE_DESKTOP_KEY_CATEGORIES       "Categories"
#define G_KEY_FILE_DESKTOP_KEY_MIME_TYPE        "MimeType"
#define G_KEY_FILE_DESKTOP_KEY_TERMINAL         "Terminal"
#define G_KEY_FILE_DESKTOP_KEY_PATH             "Path"
#define G_KEY_FILE_DESKTOP_KEY_EXEC             "Exec"
#define G_KEY_FILE_DESKTOP_KEY_TRY_EXEC         "TryExec"
#define G_KEY_FILE_DESKTOP_KEY_NOT_SHOW_IN      "NotShowIn"
#define G_KEY_FILE_DESKTOP_KEY_ONLY_SHOW_IN     "OnlyShowIn"
#define G_KEY_FILE_DESKTOP_KEY_HIDDEN           "Hidden"
#define G_KEY_FILE_DESKTOP_KEY_ICON             "Icon"
#define G_KEY_FILE_DESKTOP_KEY_COMMENT          "Comment"
#define G_KEY_FILE_DESKTOP_KEY_NO_DISPLAY       "NoDisplay"
#define G_KEY_FILE_DESKTOP_KEY_GENERIC_NAME     "GenericName"
#define G_KEY_FILE_DESKTOP_KEY_NAME             "Name"
#define G_KEY_FILE_DESKTOP_KEY_VERSION          "Version"
#define G_KEY_FILE_DESKTOP_KEY_TYPE             "Type"
#define G_KEY_FILE_DESKTOP_GROUP                "Desktop Entry"
#define G_KEY_FILE_ERROR g_key_file_error_quark()
#define G_WIN32_MSG_HANDLE 19981206
#define G_IO_CHANNEL_ERROR g_io_channel_error_quark()
#define NC_(Context, String) (String)
#define C_(Context,String) g_dpgettext (NULL, Context "\004" String, strlen (Context) + 1)
#define N_(String) (String)
#define Q_(String) g_dpgettext (NULL, String, 0)
#define NC_(Context, String) (String)
#define C_(Context,String) g_dpgettext (GETTEXT_PACKAGE, Context "\004" String, strlen (Context) + 1)
#define N_(String) (String)
#define Q_(String) g_dpgettext (GETTEXT_PACKAGE, String, 0)
#define	 g_hook_append( hook_list, hook )  \
     g_hook_insert_before ((hook_list), NULL, (hook))
#define G_HOOK_IS_UNLINKED(hook)	(G_HOOK (hook)->next == NULL && \
					 G_HOOK (hook)->prev == NULL && \
					 G_HOOK (hook)->hook_id == 0 && \
					 G_HOOK (hook)->ref_count == 0)
#define G_HOOK_IS_VALID(hook)		(G_HOOK (hook)->hook_id != 0 && \
					 (G_HOOK_FLAGS (hook) & \
                                          G_HOOK_FLAG_ACTIVE))
#define	G_HOOK_IN_CALL(hook)		((G_HOOK_FLAGS (hook) & \
					  G_HOOK_FLAG_IN_CALL) != 0)
#define	G_HOOK_ACTIVE(hook)		((G_HOOK_FLAGS (hook) & \
					  G_HOOK_FLAG_ACTIVE) != 0)
#define	G_HOOK_FLAGS(hook)		(G_HOOK (hook)->flags)
#define	G_HOOK(hook)			((GHook*) (hook))
#define G_HOOK_FLAG_USER_SHIFT	(4)
#define g_hash_table_thaw(hash_table) ((void)0)
#define g_hash_table_freeze(hash_table) ((void)0)
#define g_dirname g_path_get_dirname
#define G_IS_DIR_SEPARATOR(c) ((c) == G_DIR_SEPARATOR || (c) == '/')
#define G_FILE_ERROR g_file_error_quark ()
#define G_TIME_SPAN_MILLISECOND         (G_GINT64_CONSTANT (1000))
#define G_TIME_SPAN_SECOND              (G_GINT64_CONSTANT (1000000))
#define G_TIME_SPAN_MINUTE              (G_GINT64_CONSTANT (60000000))
#define G_TIME_SPAN_HOUR                (G_GINT64_CONSTANT (3600000000))
#define G_TIME_SPAN_DAY                 (G_GINT64_CONSTANT (86400000000))
#define g_date_sunday_weeks_in_year	g_date_get_sunday_weeks_in_year
#define g_date_monday_weeks_in_year 	g_date_get_monday_weeks_in_year
#define g_date_days_in_month 		g_date_get_days_in_month
#define g_date_sunday_week_of_year 	g_date_get_sunday_week_of_year
#define g_date_monday_week_of_year 	g_date_get_monday_week_of_year
#define g_date_day_of_year 		g_date_get_day_of_year
#define g_date_julian 			g_date_get_julian
#define g_date_day 			g_date_get_day
#define g_date_year 			g_date_get_year
#define g_date_month 			g_date_get_month
#define g_date_weekday 			g_date_get_weekday
#define G_DATE_BAD_YEAR   0U
#define G_DATE_BAD_DAY    0U
#define G_DATE_BAD_JULIAN 0U
#define   g_dataset_remove_data(l, k)           \
     g_dataset_id_set_data ((l), g_quark_try_string (k), NULL)
#define   g_dataset_set_data(l, k, d)           \
     g_dataset_set_data_full ((l), (k), (d), NULL)
#define   g_dataset_remove_no_notify(l, k)      \
     g_dataset_id_remove_no_notify ((l), g_quark_try_string (k))
#define   g_dataset_set_data_full(l, k, d, f)   \
     g_dataset_id_set_data_full ((l), g_quark_from_string (k), (d), (f))
#define   g_dataset_get_data(l, k)              \
     (g_dataset_id_get_data ((l), g_quark_try_string (k)))
#define   g_dataset_id_remove_data(l, k)        \
     g_dataset_id_set_data ((l), (k), NULL)
#define   g_dataset_id_set_data(l, k, d)        \
     g_dataset_id_set_data_full ((l), (k), (d), NULL)
#define   g_datalist_remove_data(dl, k)         \
     g_datalist_id_set_data ((dl), g_quark_try_string (k), NULL)
#define   g_datalist_set_data(dl, k, d)         \
     g_datalist_set_data_full ((dl), (k), (d), NULL)
#define   g_datalist_remove_no_notify(dl, k)    \
     g_datalist_id_remove_no_notify ((dl), g_quark_try_string (k))
#define   g_datalist_set_data_full(dl, k, d, f) \
     g_datalist_id_set_data_full ((dl), g_quark_from_string (k), (d), (f))
#define   g_datalist_id_remove_data(dl, q)      \
     g_datalist_id_set_data ((dl), (q), NULL)
#define   g_datalist_id_set_data(dl, q, d)      \
     g_datalist_id_set_data_full ((dl), (q), (d), NULL)
#define G_DATALIST_FLAGS_MASK 0x3
#define G_CONVERT_ERROR g_convert_error_quark()
#define G_BOOKMARK_FILE_ERROR	(g_bookmark_file_error_quark ())
#  define G_BREAKPOINT()        G_STMT_START{ __asm__ __volatile__ ("int $03"); }G_STMT_END
#define    g_ptr_array_index(array,index_) ((array)->pdata)[index_]
#define g_array_index(a,t,i)      (((t*) (void *) (a)->data) [(i)])
#define g_array_insert_val(a,i,v) g_array_insert_vals (a, i, &(v), 1)
#define g_array_prepend_val(a,v)  g_array_prepend_vals (a, &(v), 1)
#define g_array_append_val(a,v)	  g_array_append_vals (a, &(v), 1)
#define g_newa(struct_type, n_structs)	((struct_type*) g_alloca (sizeof (struct_type) * (gsize) (n_structs)))
#define g_alloca(size)		 alloca (size)
# define alloca(size)   __builtin_alloca (size)

typedef int GPid;
typedef unsigned long guintptr;
typedef signed long gintptr;
typedef unsigned long gsize;
typedef signed long gssize;
typedef unsigned long guint64;
typedef signed long gint64;
typedef unsigned int guint32;
typedef signed int gint32;
typedef unsigned short guint16;
typedef signed short gint16;
typedef unsigned char guint8;
typedef signed char gint8;
typedef const void *gconstpointer;
typedef void* gpointer;
typedef double  gdouble;
typedef float   gfloat;
typedef unsigned int    guint;
typedef unsigned long   gulong;
typedef unsigned short  gushort;
typedef unsigned char   guchar;
typedef int    gint;
typedef long   glong;
typedef short  gshort;
typedef char   gchar;
typedef void GMutexLocker;
typedef struct GTestSuite GTestSuite;
typedef struct GTestCase  GTestCase;
typedef struct _stat32 GStatBuf;
typedef struct _GSequenceNode  GSequenceIter;
typedef struct _GIConv *GIConv;
typedef gint   gboolean;
typedef gint64 goffset;
typedef guint16 gunichar2;
typedef guint32 gunichar;
typedef gchar** GStrv;
typedef guint32 GQuark;
typedef gint64 GTimeSpan;
typedef guint8  GDateDay;   /* day of the month */
typedef guint16 GDateYear;
typedef gint32  GTime;

typedef struct _GModule GModule;
typedef struct _GStaticPrivate GStaticPrivate;
typedef struct _GStaticRWLock GStaticRWLock;
typedef struct _GStaticRecMutex GStaticRecMutex;
typedef struct _GThreadFunctions GThreadFunctions;
typedef struct _GThread GThread;
typedef struct _GRelation GRelation;
typedef struct _GTuples GTuples;
typedef struct _GCompletion GCompletion;
typedef struct _GCache GCache;
typedef struct _GVariantType GVariantType;
typedef struct _GVariant GVariant;
typedef struct _GVariantDict GVariantDict;
typedef struct _GVariantBuilder GVariantBuilder;
typedef struct _GVariantIter GVariantIter;
typedef struct _GDebugKey GDebugKey;
typedef struct _GTimeVal GTimeVal;
typedef struct _GTree GTree;
typedef struct _GTrashStack GTrashStack;
typedef struct _GTimeZone GTimeZone;
typedef struct _GTimer GTimer;
typedef struct _GThreadPool GThreadPool;
typedef struct _GThread GThread;
typedef struct _GOnce GOnce;
typedef struct _GPrivate GPrivate;
typedef struct _GRecMutex GRecMutex;
typedef struct _GCond GCond;
typedef struct _GRWLock GRWLock;
typedef struct _GStringChunk GStringChunk;
typedef struct _GString GString;
typedef struct _GWin32PrivateStat GWin32PrivateStat;
typedef struct _GWin32PrivateStat GWin32PrivateStat;
typedef struct _utimbuf utimbuf;
typedef struct _GSList GSList;
typedef struct _GSequence GSequence;
typedef struct _GScanner GScanner;
typedef struct _GScannerConfig GScannerConfig;
typedef struct _GRegex GRegex;
typedef struct _GMatchInfo GMatchInfo;
typedef struct _GRand GRand;
typedef struct _GQueue GQueue;
typedef struct _GPollFD GPollFD;
typedef struct _GPatternSpec GPatternSpec;
typedef struct _GOptionGroup GOptionGroup;
typedef struct _GOptionContext GOptionContext;
typedef struct _GOptionEntry GOptionEntry;
typedef struct _GNode GNode;
typedef struct _GLogField GLogField;
typedef struct _GMemVTable GMemVTable;
typedef struct _GMarkupParseContext GMarkupParseContext;
typedef struct _GMarkupParser GMarkupParser;
typedef struct _GMappedFile GMappedFile;
typedef struct _GSourcePrivate GSourcePrivate;
typedef struct _GMainLoop GMainLoop;
typedef struct _GMainContext GMainContext;
typedef struct _GSourceFuncs GSourceFuncs;
typedef struct _GSourceCallbackFuncs GSourceCallbackFuncs;
typedef struct _GSource GSource;
typedef struct _GList GList;
typedef struct _GKeyFile GKeyFile;
typedef struct _GIOFuncs GIOFuncs;
typedef struct _GIOChannel GIOChannel;
typedef struct _GHook GHook;
typedef struct _GHookList GHookList;
typedef struct _GHmac GHmac;
typedef struct _GHashTable GHashTable;
typedef struct _GHashTableIter GHashTableIter;
typedef struct _GError GError;
typedef struct _GDir GDir;
typedef struct _GDateTime GDateTime;
typedef struct _GDate GDate;
typedef struct _GData GData;
typedef struct _GChecksum GChecksum;
typedef struct _GBookmarkFile GBookmarkFile;
typedef struct _GAsyncQueue GAsyncQueue;
typedef struct _GBytes GBytes;
typedef struct _GPtrArray GPtrArray;
typedef struct _GByteArray GByteArray;
typedef struct _GArray GArray;

typedef struct _GDoubleIEEE754 GDoubleIEEE754;
typedef struct _GFloatIEEE754 GFloatIEEE754;
typedef struct _GMutex GMutex;
typedef struct _GTokenValue GTokenValue;

typedef enum
{
  G_MODULE_BIND_LAZY	= 1 << 0,
  G_MODULE_BIND_LOCAL	= 1 << 1,
  G_MODULE_BIND_MASK	= 0x03
} GModuleFlags;
typedef enum
{
  G_THREAD_PRIORITY_LOW,
  G_THREAD_PRIORITY_NORMAL,
  G_THREAD_PRIORITY_HIGH,
  G_THREAD_PRIORITY_URGENT
} GThreadPriority;
typedef enum
{
  G_WIN32_OS_ANY,
  G_WIN32_OS_WORKSTATION,
  G_WIN32_OS_SERVER,
} GWin32OSType;
typedef enum
{
  G_VARIANT_PARSE_ERROR_FAILED,
  G_VARIANT_PARSE_ERROR_BASIC_TYPE_EXPECTED,
  G_VARIANT_PARSE_ERROR_CANNOT_INFER_TYPE,
  G_VARIANT_PARSE_ERROR_DEFINITE_TYPE_EXPECTED,
  G_VARIANT_PARSE_ERROR_INPUT_NOT_AT_END,
  G_VARIANT_PARSE_ERROR_INVALID_CHARACTER,
  G_VARIANT_PARSE_ERROR_INVALID_FORMAT_STRING,
  G_VARIANT_PARSE_ERROR_INVALID_OBJECT_PATH,
  G_VARIANT_PARSE_ERROR_INVALID_SIGNATURE,
  G_VARIANT_PARSE_ERROR_INVALID_TYPE_STRING,
  G_VARIANT_PARSE_ERROR_NO_COMMON_TYPE,
  G_VARIANT_PARSE_ERROR_NUMBER_OUT_OF_RANGE,
  G_VARIANT_PARSE_ERROR_NUMBER_TOO_BIG,
  G_VARIANT_PARSE_ERROR_TYPE_ERROR,
  G_VARIANT_PARSE_ERROR_UNEXPECTED_TOKEN,
  G_VARIANT_PARSE_ERROR_UNKNOWN_KEYWORD,
  G_VARIANT_PARSE_ERROR_UNTERMINATED_STRING_CONSTANT,
  G_VARIANT_PARSE_ERROR_VALUE_EXPECTED
} GVariantParseError;
typedef enum
{
  G_VARIANT_CLASS_BOOLEAN       = 'b',
  G_VARIANT_CLASS_BYTE          = 'y',
  G_VARIANT_CLASS_INT16         = 'n',
  G_VARIANT_CLASS_UINT16        = 'q',
  G_VARIANT_CLASS_INT32         = 'i',
  G_VARIANT_CLASS_UINT32        = 'u',
  G_VARIANT_CLASS_INT64         = 'x',
  G_VARIANT_CLASS_UINT64        = 't',
  G_VARIANT_CLASS_HANDLE        = 'h',
  G_VARIANT_CLASS_DOUBLE        = 'd',
  G_VARIANT_CLASS_STRING        = 's',
  G_VARIANT_CLASS_OBJECT_PATH   = 'o',
  G_VARIANT_CLASS_SIGNATURE     = 'g',
  G_VARIANT_CLASS_VARIANT       = 'v',
  G_VARIANT_CLASS_MAYBE         = 'm',
  G_VARIANT_CLASS_ARRAY         = 'a',
  G_VARIANT_CLASS_TUPLE         = '(',
  G_VARIANT_CLASS_DICT_ENTRY    = '{'
} GVariantClass;
typedef enum
{
  G_FORMAT_SIZE_DEFAULT     = 0,
  G_FORMAT_SIZE_LONG_FORMAT = 1 << 0,
  G_FORMAT_SIZE_IEC_UNITS   = 1 << 1,
  G_FORMAT_SIZE_BITS        = 1 << 2
} GFormatSizeFlags;
typedef enum {
  G_USER_DIRECTORY_DESKTOP,
  G_USER_DIRECTORY_DOCUMENTS,
  G_USER_DIRECTORY_DOWNLOAD,
  G_USER_DIRECTORY_MUSIC,
  G_USER_DIRECTORY_PICTURES,
  G_USER_DIRECTORY_PUBLIC_SHARE,
  G_USER_DIRECTORY_TEMPLATES,
  G_USER_DIRECTORY_VIDEOS,

  G_USER_N_DIRECTORIES
} GUserDirectory;
typedef enum {
  G_NORMALIZE_DEFAULT,
  G_NORMALIZE_NFD = G_NORMALIZE_DEFAULT,
  G_NORMALIZE_DEFAULT_COMPOSE,
  G_NORMALIZE_NFC = G_NORMALIZE_DEFAULT_COMPOSE,
  G_NORMALIZE_ALL,
  G_NORMALIZE_NFKD = G_NORMALIZE_ALL,
  G_NORMALIZE_ALL_COMPOSE,
  G_NORMALIZE_NFKC = G_NORMALIZE_ALL_COMPOSE
} GNormalizeMode;
typedef enum
{                         /* ISO 15924 code */
  G_UNICODE_SCRIPT_INVALID_CODE = -1,
  G_UNICODE_SCRIPT_COMMON       = 0,   /* Zyyy */
  G_UNICODE_SCRIPT_INHERITED,          /* Zinh (Qaai) */
  G_UNICODE_SCRIPT_ARABIC,             /* Arab */
  G_UNICODE_SCRIPT_ARMENIAN,           /* Armn */
  G_UNICODE_SCRIPT_BENGALI,            /* Beng */
  G_UNICODE_SCRIPT_BOPOMOFO,           /* Bopo */
  G_UNICODE_SCRIPT_CHEROKEE,           /* Cher */
  G_UNICODE_SCRIPT_COPTIC,             /* Copt (Qaac) */
  G_UNICODE_SCRIPT_CYRILLIC,           /* Cyrl (Cyrs) */
  G_UNICODE_SCRIPT_DESERET,            /* Dsrt */
  G_UNICODE_SCRIPT_DEVANAGARI,         /* Deva */
  G_UNICODE_SCRIPT_ETHIOPIC,           /* Ethi */
  G_UNICODE_SCRIPT_GEORGIAN,           /* Geor (Geon, Geoa) */
  G_UNICODE_SCRIPT_GOTHIC,             /* Goth */
  G_UNICODE_SCRIPT_GREEK,              /* Grek */
  G_UNICODE_SCRIPT_GUJARATI,           /* Gujr */
  G_UNICODE_SCRIPT_GURMUKHI,           /* Guru */
  G_UNICODE_SCRIPT_HAN,                /* Hani */
  G_UNICODE_SCRIPT_HANGUL,             /* Hang */
  G_UNICODE_SCRIPT_HEBREW,             /* Hebr */
  G_UNICODE_SCRIPT_HIRAGANA,           /* Hira */
  G_UNICODE_SCRIPT_KANNADA,            /* Knda */
  G_UNICODE_SCRIPT_KATAKANA,           /* Kana */
  G_UNICODE_SCRIPT_KHMER,              /* Khmr */
  G_UNICODE_SCRIPT_LAO,                /* Laoo */
  G_UNICODE_SCRIPT_LATIN,              /* Latn (Latf, Latg) */
  G_UNICODE_SCRIPT_MALAYALAM,          /* Mlym */
  G_UNICODE_SCRIPT_MONGOLIAN,          /* Mong */
  G_UNICODE_SCRIPT_MYANMAR,            /* Mymr */
  G_UNICODE_SCRIPT_OGHAM,              /* Ogam */
  G_UNICODE_SCRIPT_OLD_ITALIC,         /* Ital */
  G_UNICODE_SCRIPT_ORIYA,              /* Orya */
  G_UNICODE_SCRIPT_RUNIC,              /* Runr */
  G_UNICODE_SCRIPT_SINHALA,            /* Sinh */
  G_UNICODE_SCRIPT_SYRIAC,             /* Syrc (Syrj, Syrn, Syre) */
  G_UNICODE_SCRIPT_TAMIL,              /* Taml */
  G_UNICODE_SCRIPT_TELUGU,             /* Telu */
  G_UNICODE_SCRIPT_THAANA,             /* Thaa */
  G_UNICODE_SCRIPT_THAI,               /* Thai */
  G_UNICODE_SCRIPT_TIBETAN,            /* Tibt */
  G_UNICODE_SCRIPT_CANADIAN_ABORIGINAL, /* Cans */
  G_UNICODE_SCRIPT_YI,                 /* Yiii */
  G_UNICODE_SCRIPT_TAGALOG,            /* Tglg */
  G_UNICODE_SCRIPT_HANUNOO,            /* Hano */
  G_UNICODE_SCRIPT_BUHID,              /* Buhd */
  G_UNICODE_SCRIPT_TAGBANWA,           /* Tagb */

  /* Unicode-4.0 additions */
  G_UNICODE_SCRIPT_BRAILLE,            /* Brai */
  G_UNICODE_SCRIPT_CYPRIOT,            /* Cprt */
  G_UNICODE_SCRIPT_LIMBU,              /* Limb */
  G_UNICODE_SCRIPT_OSMANYA,            /* Osma */
  G_UNICODE_SCRIPT_SHAVIAN,            /* Shaw */
  G_UNICODE_SCRIPT_LINEAR_B,           /* Linb */
  G_UNICODE_SCRIPT_TAI_LE,             /* Tale */
  G_UNICODE_SCRIPT_UGARITIC,           /* Ugar */

  /* Unicode-4.1 additions */
  G_UNICODE_SCRIPT_NEW_TAI_LUE,        /* Talu */
  G_UNICODE_SCRIPT_BUGINESE,           /* Bugi */
  G_UNICODE_SCRIPT_GLAGOLITIC,         /* Glag */
  G_UNICODE_SCRIPT_TIFINAGH,           /* Tfng */
  G_UNICODE_SCRIPT_SYLOTI_NAGRI,       /* Sylo */
  G_UNICODE_SCRIPT_OLD_PERSIAN,        /* Xpeo */
  G_UNICODE_SCRIPT_KHAROSHTHI,         /* Khar */

  /* Unicode-5.0 additions */
  G_UNICODE_SCRIPT_UNKNOWN,            /* Zzzz */
  G_UNICODE_SCRIPT_BALINESE,           /* Bali */
  G_UNICODE_SCRIPT_CUNEIFORM,          /* Xsux */
  G_UNICODE_SCRIPT_PHOENICIAN,         /* Phnx */
  G_UNICODE_SCRIPT_PHAGS_PA,           /* Phag */
  G_UNICODE_SCRIPT_NKO,                /* Nkoo */

  /* Unicode-5.1 additions */
  G_UNICODE_SCRIPT_KAYAH_LI,           /* Kali */
  G_UNICODE_SCRIPT_LEPCHA,             /* Lepc */
  G_UNICODE_SCRIPT_REJANG,             /* Rjng */
  G_UNICODE_SCRIPT_SUNDANESE,          /* Sund */
  G_UNICODE_SCRIPT_SAURASHTRA,         /* Saur */
  G_UNICODE_SCRIPT_CHAM,               /* Cham */
  G_UNICODE_SCRIPT_OL_CHIKI,           /* Olck */
  G_UNICODE_SCRIPT_VAI,                /* Vaii */
  G_UNICODE_SCRIPT_CARIAN,             /* Cari */
  G_UNICODE_SCRIPT_LYCIAN,             /* Lyci */
  G_UNICODE_SCRIPT_LYDIAN,             /* Lydi */

  /* Unicode-5.2 additions */
  G_UNICODE_SCRIPT_AVESTAN,                /* Avst */
  G_UNICODE_SCRIPT_BAMUM,                  /* Bamu */
  G_UNICODE_SCRIPT_EGYPTIAN_HIEROGLYPHS,   /* Egyp */
  G_UNICODE_SCRIPT_IMPERIAL_ARAMAIC,       /* Armi */
  G_UNICODE_SCRIPT_INSCRIPTIONAL_PAHLAVI,  /* Phli */
  G_UNICODE_SCRIPT_INSCRIPTIONAL_PARTHIAN, /* Prti */
  G_UNICODE_SCRIPT_JAVANESE,               /* Java */
  G_UNICODE_SCRIPT_KAITHI,                 /* Kthi */
  G_UNICODE_SCRIPT_LISU,                   /* Lisu */
  G_UNICODE_SCRIPT_MEETEI_MAYEK,           /* Mtei */
  G_UNICODE_SCRIPT_OLD_SOUTH_ARABIAN,      /* Sarb */
  G_UNICODE_SCRIPT_OLD_TURKIC,             /* Orkh */
  G_UNICODE_SCRIPT_SAMARITAN,              /* Samr */
  G_UNICODE_SCRIPT_TAI_THAM,               /* Lana */
  G_UNICODE_SCRIPT_TAI_VIET,               /* Tavt */

  /* Unicode-6.0 additions */
  G_UNICODE_SCRIPT_BATAK,                  /* Batk */
  G_UNICODE_SCRIPT_BRAHMI,                 /* Brah */
  G_UNICODE_SCRIPT_MANDAIC,                /* Mand */

  /* Unicode-6.1 additions */
  G_UNICODE_SCRIPT_CHAKMA,                 /* Cakm */
  G_UNICODE_SCRIPT_MEROITIC_CURSIVE,       /* Merc */
  G_UNICODE_SCRIPT_MEROITIC_HIEROGLYPHS,   /* Mero */
  G_UNICODE_SCRIPT_MIAO,                   /* Plrd */
  G_UNICODE_SCRIPT_SHARADA,                /* Shrd */
  G_UNICODE_SCRIPT_SORA_SOMPENG,           /* Sora */
  G_UNICODE_SCRIPT_TAKRI,                  /* Takr */

  /* Unicode 7.0 additions */
  G_UNICODE_SCRIPT_BASSA_VAH,              /* Bass */
  G_UNICODE_SCRIPT_CAUCASIAN_ALBANIAN,     /* Aghb */
  G_UNICODE_SCRIPT_DUPLOYAN,               /* Dupl */
  G_UNICODE_SCRIPT_ELBASAN,                /* Elba */
  G_UNICODE_SCRIPT_GRANTHA,                /* Gran */
  G_UNICODE_SCRIPT_KHOJKI,                 /* Khoj */
  G_UNICODE_SCRIPT_KHUDAWADI,              /* Sind */
  G_UNICODE_SCRIPT_LINEAR_A,               /* Lina */
  G_UNICODE_SCRIPT_MAHAJANI,               /* Mahj */
  G_UNICODE_SCRIPT_MANICHAEAN,             /* Manu */
  G_UNICODE_SCRIPT_MENDE_KIKAKUI,          /* Mend */
  G_UNICODE_SCRIPT_MODI,                   /* Modi */
  G_UNICODE_SCRIPT_MRO,                    /* Mroo */
  G_UNICODE_SCRIPT_NABATAEAN,              /* Nbat */
  G_UNICODE_SCRIPT_OLD_NORTH_ARABIAN,      /* Narb */
  G_UNICODE_SCRIPT_OLD_PERMIC,             /* Perm */
  G_UNICODE_SCRIPT_PAHAWH_HMONG,           /* Hmng */
  G_UNICODE_SCRIPT_PALMYRENE,              /* Palm */
  G_UNICODE_SCRIPT_PAU_CIN_HAU,            /* Pauc */
  G_UNICODE_SCRIPT_PSALTER_PAHLAVI,        /* Phlp */
  G_UNICODE_SCRIPT_SIDDHAM,                /* Sidd */
  G_UNICODE_SCRIPT_TIRHUTA,                /* Tirh */
  G_UNICODE_SCRIPT_WARANG_CITI,            /* Wara */

  /* Unicode 8.0 additions */
  G_UNICODE_SCRIPT_AHOM,                   /* Ahom */
  G_UNICODE_SCRIPT_ANATOLIAN_HIEROGLYPHS,  /* Hluw */
  G_UNICODE_SCRIPT_HATRAN,                 /* Hatr */
  G_UNICODE_SCRIPT_MULTANI,                /* Mult */
  G_UNICODE_SCRIPT_OLD_HUNGARIAN,          /* Hung */
  G_UNICODE_SCRIPT_SIGNWRITING,            /* Sgnw */

  /* Unicode 9.0 additions */
  G_UNICODE_SCRIPT_ADLAM,                  /* Adlm */
  G_UNICODE_SCRIPT_BHAIKSUKI,              /* Bhks */
  G_UNICODE_SCRIPT_MARCHEN,                /* Marc */
  G_UNICODE_SCRIPT_NEWA,                   /* Newa */
  G_UNICODE_SCRIPT_OSAGE,                  /* Osge */
  G_UNICODE_SCRIPT_TANGUT,                 /* Tang */

  /* Unicode 10.0 additions */
  G_UNICODE_SCRIPT_MASARAM_GONDI,          /* Gonm */
  G_UNICODE_SCRIPT_NUSHU,                  /* Nshu */
  G_UNICODE_SCRIPT_SOYOMBO,                /* Soyo */
  G_UNICODE_SCRIPT_ZANABAZAR_SQUARE        /* Zanb */
} GUnicodeScript;
typedef enum
{
  G_UNICODE_BREAK_MANDATORY,
  G_UNICODE_BREAK_CARRIAGE_RETURN,
  G_UNICODE_BREAK_LINE_FEED,
  G_UNICODE_BREAK_COMBINING_MARK,
  G_UNICODE_BREAK_SURROGATE,
  G_UNICODE_BREAK_ZERO_WIDTH_SPACE,
  G_UNICODE_BREAK_INSEPARABLE,
  G_UNICODE_BREAK_NON_BREAKING_GLUE,
  G_UNICODE_BREAK_CONTINGENT,
  G_UNICODE_BREAK_SPACE,
  G_UNICODE_BREAK_AFTER,
  G_UNICODE_BREAK_BEFORE,
  G_UNICODE_BREAK_BEFORE_AND_AFTER,
  G_UNICODE_BREAK_HYPHEN,
  G_UNICODE_BREAK_NON_STARTER,
  G_UNICODE_BREAK_OPEN_PUNCTUATION,
  G_UNICODE_BREAK_CLOSE_PUNCTUATION,
  G_UNICODE_BREAK_QUOTATION,
  G_UNICODE_BREAK_EXCLAMATION,
  G_UNICODE_BREAK_IDEOGRAPHIC,
  G_UNICODE_BREAK_NUMERIC,
  G_UNICODE_BREAK_INFIX_SEPARATOR,
  G_UNICODE_BREAK_SYMBOL,
  G_UNICODE_BREAK_ALPHABETIC,
  G_UNICODE_BREAK_PREFIX,
  G_UNICODE_BREAK_POSTFIX,
  G_UNICODE_BREAK_COMPLEX_CONTEXT,
  G_UNICODE_BREAK_AMBIGUOUS,
  G_UNICODE_BREAK_UNKNOWN,
  G_UNICODE_BREAK_NEXT_LINE,
  G_UNICODE_BREAK_WORD_JOINER,
  G_UNICODE_BREAK_HANGUL_L_JAMO,
  G_UNICODE_BREAK_HANGUL_V_JAMO,
  G_UNICODE_BREAK_HANGUL_T_JAMO,
  G_UNICODE_BREAK_HANGUL_LV_SYLLABLE,
  G_UNICODE_BREAK_HANGUL_LVT_SYLLABLE,
  G_UNICODE_BREAK_CLOSE_PARANTHESIS,
  G_UNICODE_BREAK_CONDITIONAL_JAPANESE_STARTER,
  G_UNICODE_BREAK_HEBREW_LETTER,
  G_UNICODE_BREAK_REGIONAL_INDICATOR,
  G_UNICODE_BREAK_EMOJI_BASE,
  G_UNICODE_BREAK_EMOJI_MODIFIER,
  G_UNICODE_BREAK_ZERO_WIDTH_JOINER
} GUnicodeBreakType;
typedef enum
{
  G_UNICODE_CONTROL,
  G_UNICODE_FORMAT,
  G_UNICODE_UNASSIGNED,
  G_UNICODE_PRIVATE_USE,
  G_UNICODE_SURROGATE,
  G_UNICODE_LOWERCASE_LETTER,
  G_UNICODE_MODIFIER_LETTER,
  G_UNICODE_OTHER_LETTER,
  G_UNICODE_TITLECASE_LETTER,
  G_UNICODE_UPPERCASE_LETTER,
  G_UNICODE_SPACING_MARK,
  G_UNICODE_ENCLOSING_MARK,
  G_UNICODE_NON_SPACING_MARK,
  G_UNICODE_DECIMAL_NUMBER,
  G_UNICODE_LETTER_NUMBER,
  G_UNICODE_OTHER_NUMBER,
  G_UNICODE_CONNECT_PUNCTUATION,
  G_UNICODE_DASH_PUNCTUATION,
  G_UNICODE_CLOSE_PUNCTUATION,
  G_UNICODE_FINAL_PUNCTUATION,
  G_UNICODE_INITIAL_PUNCTUATION,
  G_UNICODE_OTHER_PUNCTUATION,
  G_UNICODE_OPEN_PUNCTUATION,
  G_UNICODE_CURRENCY_SYMBOL,
  G_UNICODE_MODIFIER_SYMBOL,
  G_UNICODE_MATH_SYMBOL,
  G_UNICODE_OTHER_SYMBOL,
  G_UNICODE_LINE_SEPARATOR,
  G_UNICODE_PARAGRAPH_SEPARATOR,
  G_UNICODE_SPACE_SEPARATOR
} GUnicodeType;
typedef enum
{
  G_TIME_TYPE_STANDARD,
  G_TIME_TYPE_DAYLIGHT,
  G_TIME_TYPE_UNIVERSAL
} GTimeType;
typedef enum
{
  G_ONCE_STATUS_NOTCALLED,
  G_ONCE_STATUS_PROGRESS,
  G_ONCE_STATUS_READY
} GOnceStatus;
typedef enum
{
  G_THREAD_ERROR_AGAIN /* Resource temporarily unavailable */
} GThreadError;
typedef enum
{
  G_TEST_DIST,
  G_TEST_BUILT
} GTestFileType;
typedef enum {
  G_TEST_LOG_NONE,
  G_TEST_LOG_ERROR,             /* s:msg */
  G_TEST_LOG_START_BINARY,      /* s:binaryname s:seed */
  G_TEST_LOG_LIST_CASE,         /* s:testpath */
  G_TEST_LOG_SKIP_CASE,         /* s:testpath */
  G_TEST_LOG_START_CASE,        /* s:testpath */
  G_TEST_LOG_STOP_CASE,         /* d:status d:nforks d:elapsed */
  G_TEST_LOG_MIN_RESULT,        /* s:blurb d:result */
  G_TEST_LOG_MAX_RESULT,        /* s:blurb d:result */
  G_TEST_LOG_MESSAGE,           /* s:blurb */
  G_TEST_LOG_START_SUITE,
  G_TEST_LOG_STOP_SUITE
} GTestLogType;
typedef enum {
  G_TEST_RUN_SUCCESS,
  G_TEST_RUN_SKIPPED,
  G_TEST_RUN_FAILURE,
  G_TEST_RUN_INCOMPLETE
} GTestResult;
typedef enum {
  G_TEST_SUBPROCESS_INHERIT_STDIN  = 1 << 0,
  G_TEST_SUBPROCESS_INHERIT_STDOUT = 1 << 1,
  G_TEST_SUBPROCESS_INHERIT_STDERR = 1 << 2
} GTestSubprocessFlags;
typedef enum {
  G_TEST_TRAP_SILENCE_STDOUT    = 1 << 7,
  G_TEST_TRAP_SILENCE_STDERR    = 1 << 8,
  G_TEST_TRAP_INHERIT_STDIN     = 1 << 9
} GTestTrapFlags;
typedef enum
  {
    G_NUMBER_PARSER_ERROR_INVALID,
    G_NUMBER_PARSER_ERROR_OUT_OF_BOUNDS,
  } GNumberParserError;
typedef enum {
  G_ASCII_ALNUM  = 1 << 0,
  G_ASCII_ALPHA  = 1 << 1,
  G_ASCII_CNTRL  = 1 << 2,
  G_ASCII_DIGIT  = 1 << 3,
  G_ASCII_GRAPH  = 1 << 4,
  G_ASCII_LOWER  = 1 << 5,
  G_ASCII_PRINT  = 1 << 6,
  G_ASCII_PUNCT  = 1 << 7,
  G_ASCII_SPACE  = 1 << 8,
  G_ASCII_UPPER  = 1 << 9,
  G_ASCII_XDIGIT = 1 << 10
} GAsciiType;
typedef enum
{
  G_SPAWN_DEFAULT                = 0,
  G_SPAWN_LEAVE_DESCRIPTORS_OPEN = 1 << 0,
  G_SPAWN_DO_NOT_REAP_CHILD      = 1 << 1,
  /* look for argv[0] in the path i.e. use execvp() */
  G_SPAWN_SEARCH_PATH            = 1 << 2,
  /* Dump output to /dev/null */
  G_SPAWN_STDOUT_TO_DEV_NULL     = 1 << 3,
  G_SPAWN_STDERR_TO_DEV_NULL     = 1 << 4,
  G_SPAWN_CHILD_INHERITS_STDIN   = 1 << 5,
  G_SPAWN_FILE_AND_ARGV_ZERO     = 1 << 6,
  G_SPAWN_SEARCH_PATH_FROM_ENVP  = 1 << 7,
  G_SPAWN_CLOEXEC_PIPES          = 1 << 8
} GSpawnFlags;
typedef enum
{
  G_SPAWN_ERROR_FORK,   /* fork failed due to lack of memory */
  G_SPAWN_ERROR_READ,   /* read or select on pipes failed */
  G_SPAWN_ERROR_CHDIR,  /* changing to working dir failed */
  G_SPAWN_ERROR_ACCES,  /* execv() returned EACCES */
  G_SPAWN_ERROR_PERM,   /* execv() returned EPERM */
  G_SPAWN_ERROR_TOO_BIG,/* execv() returned E2BIG */
#ifndef G_DISABLE_DEPRECATED
  G_SPAWN_ERROR_2BIG = G_SPAWN_ERROR_TOO_BIG,
#endif
  G_SPAWN_ERROR_NOEXEC, /* execv() returned ENOEXEC */
  G_SPAWN_ERROR_NAMETOOLONG, /* ""  "" ENAMETOOLONG */
  G_SPAWN_ERROR_NOENT,       /* ""  "" ENOENT */
  G_SPAWN_ERROR_NOMEM,       /* ""  "" ENOMEM */
  G_SPAWN_ERROR_NOTDIR,      /* ""  "" ENOTDIR */
  G_SPAWN_ERROR_LOOP,        /* ""  "" ELOOP   */
  G_SPAWN_ERROR_TXTBUSY,     /* ""  "" ETXTBUSY */
  G_SPAWN_ERROR_IO,          /* ""  "" EIO */
  G_SPAWN_ERROR_NFILE,       /* ""  "" ENFILE */
  G_SPAWN_ERROR_MFILE,       /* ""  "" EMFLE */
  G_SPAWN_ERROR_INVAL,       /* ""  "" EINVAL */
  G_SPAWN_ERROR_ISDIR,       /* ""  "" EISDIR */
  G_SPAWN_ERROR_LIBBAD,      /* ""  "" ELIBBAD */
  G_SPAWN_ERROR_FAILED       /* other fatal failure, error->message
                              * should explain
                              */
} GSpawnError;
typedef enum {
  G_SLICE_CONFIG_ALWAYS_MALLOC = 1,
  G_SLICE_CONFIG_BYPASS_MAGAZINES,
  G_SLICE_CONFIG_WORKING_SET_MSECS,
  G_SLICE_CONFIG_COLOR_INCREMENT,
  G_SLICE_CONFIG_CHUNK_SIZES,
  G_SLICE_CONFIG_CONTENTION_COUNTER
} GSliceConfig;
typedef enum
{
  /* mismatched or otherwise mangled quoting */
  G_SHELL_ERROR_BAD_QUOTING,
  /* string to be parsed was empty */
  G_SHELL_ERROR_EMPTY_STRING,
  G_SHELL_ERROR_FAILED
} GShellError;
typedef enum
{
  G_TOKEN_EOF			=   0,
  
  G_TOKEN_LEFT_PAREN		= '(',
  G_TOKEN_RIGHT_PAREN		= ')',
  G_TOKEN_LEFT_CURLY		= '{',
  G_TOKEN_RIGHT_CURLY		= '}',
  G_TOKEN_LEFT_BRACE		= '[',
  G_TOKEN_RIGHT_BRACE		= ']',
  G_TOKEN_EQUAL_SIGN		= '=',
  G_TOKEN_COMMA			= ',',
  
  G_TOKEN_NONE			= 256,
  
  G_TOKEN_ERROR,
  
  G_TOKEN_CHAR,
  G_TOKEN_BINARY,
  G_TOKEN_OCTAL,
  G_TOKEN_INT,
  G_TOKEN_HEX,
  G_TOKEN_FLOAT,
  G_TOKEN_STRING,
  
  G_TOKEN_SYMBOL,
  G_TOKEN_IDENTIFIER,
  G_TOKEN_IDENTIFIER_NULL,
  
  G_TOKEN_COMMENT_SINGLE,
  G_TOKEN_COMMENT_MULTI,

  /*< private >*/
  G_TOKEN_LAST
} GTokenType;
typedef enum
{
  G_ERR_UNKNOWN,
  G_ERR_UNEXP_EOF,
  G_ERR_UNEXP_EOF_IN_STRING,
  G_ERR_UNEXP_EOF_IN_COMMENT,
  G_ERR_NON_DIGIT_IN_CONST,
  G_ERR_DIGIT_RADIX,
  G_ERR_FLOAT_RADIX,
  G_ERR_FLOAT_MALFORMED
} GErrorType;
typedef enum
{
  G_REGEX_MATCH_ANCHORED         = 1 << 4,
  G_REGEX_MATCH_NOTBOL           = 1 << 7,
  G_REGEX_MATCH_NOTEOL           = 1 << 8,
  G_REGEX_MATCH_NOTEMPTY         = 1 << 10,
  G_REGEX_MATCH_PARTIAL          = 1 << 15,
  G_REGEX_MATCH_NEWLINE_CR       = 1 << 20,
  G_REGEX_MATCH_NEWLINE_LF       = 1 << 21,
  G_REGEX_MATCH_NEWLINE_CRLF     = G_REGEX_MATCH_NEWLINE_CR | G_REGEX_MATCH_NEWLINE_LF,
  G_REGEX_MATCH_NEWLINE_ANY      = 1 << 22,
  G_REGEX_MATCH_NEWLINE_ANYCRLF  = G_REGEX_MATCH_NEWLINE_CR | G_REGEX_MATCH_NEWLINE_ANY,
  G_REGEX_MATCH_BSR_ANYCRLF      = 1 << 23,
  G_REGEX_MATCH_BSR_ANY          = 1 << 24,
  G_REGEX_MATCH_PARTIAL_SOFT     = G_REGEX_MATCH_PARTIAL,
  G_REGEX_MATCH_PARTIAL_HARD     = 1 << 27,
  G_REGEX_MATCH_NOTEMPTY_ATSTART = 1 << 28
} GRegexMatchFlags;
typedef enum
{
  G_REGEX_CASELESS          = 1 << 0,
  G_REGEX_MULTILINE         = 1 << 1,
  G_REGEX_DOTALL            = 1 << 2,
  G_REGEX_EXTENDED          = 1 << 3,
  G_REGEX_ANCHORED          = 1 << 4,
  G_REGEX_DOLLAR_ENDONLY    = 1 << 5,
  G_REGEX_UNGREEDY          = 1 << 9,
  G_REGEX_RAW               = 1 << 11,
  G_REGEX_NO_AUTO_CAPTURE   = 1 << 12,
  G_REGEX_OPTIMIZE          = 1 << 13,
  G_REGEX_FIRSTLINE         = 1 << 18,
  G_REGEX_DUPNAMES          = 1 << 19,
  G_REGEX_NEWLINE_CR        = 1 << 20,
  G_REGEX_NEWLINE_LF        = 1 << 21,
  G_REGEX_NEWLINE_CRLF      = G_REGEX_NEWLINE_CR | G_REGEX_NEWLINE_LF,
  G_REGEX_NEWLINE_ANYCRLF   = G_REGEX_NEWLINE_CR | 1 << 22,
  G_REGEX_BSR_ANYCRLF       = 1 << 23,
  G_REGEX_JAVASCRIPT_COMPAT = 1 << 25
} GRegexCompileFlags;
typedef enum
{
  G_REGEX_ERROR_COMPILE,
  G_REGEX_ERROR_OPTIMIZE,
  G_REGEX_ERROR_REPLACE,
  G_REGEX_ERROR_MATCH,
  G_REGEX_ERROR_INTERNAL,

  /* These are the error codes from PCRE + 100 */
  G_REGEX_ERROR_STRAY_BACKSLASH = 101,
  G_REGEX_ERROR_MISSING_CONTROL_CHAR = 102,
  G_REGEX_ERROR_UNRECOGNIZED_ESCAPE = 103,
  G_REGEX_ERROR_QUANTIFIERS_OUT_OF_ORDER = 104,
  G_REGEX_ERROR_QUANTIFIER_TOO_BIG = 105,
  G_REGEX_ERROR_UNTERMINATED_CHARACTER_CLASS = 106,
  G_REGEX_ERROR_INVALID_ESCAPE_IN_CHARACTER_CLASS = 107,
  G_REGEX_ERROR_RANGE_OUT_OF_ORDER = 108,
  G_REGEX_ERROR_NOTHING_TO_REPEAT = 109,
  G_REGEX_ERROR_UNRECOGNIZED_CHARACTER = 112,
  G_REGEX_ERROR_POSIX_NAMED_CLASS_OUTSIDE_CLASS = 113,
  G_REGEX_ERROR_UNMATCHED_PARENTHESIS = 114,
  G_REGEX_ERROR_INEXISTENT_SUBPATTERN_REFERENCE = 115,
  G_REGEX_ERROR_UNTERMINATED_COMMENT = 118,
  G_REGEX_ERROR_EXPRESSION_TOO_LARGE = 120,
  G_REGEX_ERROR_MEMORY_ERROR = 121,
  G_REGEX_ERROR_VARIABLE_LENGTH_LOOKBEHIND = 125,
  G_REGEX_ERROR_MALFORMED_CONDITION = 126,
  G_REGEX_ERROR_TOO_MANY_CONDITIONAL_BRANCHES = 127,
  G_REGEX_ERROR_ASSERTION_EXPECTED = 128,
  G_REGEX_ERROR_UNKNOWN_POSIX_CLASS_NAME = 130,
  G_REGEX_ERROR_POSIX_COLLATING_ELEMENTS_NOT_SUPPORTED = 131,
  G_REGEX_ERROR_HEX_CODE_TOO_LARGE = 134,
  G_REGEX_ERROR_INVALID_CONDITION = 135,
  G_REGEX_ERROR_SINGLE_BYTE_MATCH_IN_LOOKBEHIND = 136,
  G_REGEX_ERROR_INFINITE_LOOP = 140,
  G_REGEX_ERROR_MISSING_SUBPATTERN_NAME_TERMINATOR = 142,
  G_REGEX_ERROR_DUPLICATE_SUBPATTERN_NAME = 143,
  G_REGEX_ERROR_MALFORMED_PROPERTY = 146,
  G_REGEX_ERROR_UNKNOWN_PROPERTY = 147,
  G_REGEX_ERROR_SUBPATTERN_NAME_TOO_LONG = 148,
  G_REGEX_ERROR_TOO_MANY_SUBPATTERNS = 149,
  G_REGEX_ERROR_INVALID_OCTAL_VALUE = 151,
  G_REGEX_ERROR_TOO_MANY_BRANCHES_IN_DEFINE = 154,
  G_REGEX_ERROR_DEFINE_REPETION = 155,
  G_REGEX_ERROR_INCONSISTENT_NEWLINE_OPTIONS = 156,
  G_REGEX_ERROR_MISSING_BACK_REFERENCE = 157,
  G_REGEX_ERROR_INVALID_RELATIVE_REFERENCE = 158,
  G_REGEX_ERROR_BACKTRACKING_CONTROL_VERB_ARGUMENT_FORBIDDEN = 159,
  G_REGEX_ERROR_UNKNOWN_BACKTRACKING_CONTROL_VERB  = 160,
  G_REGEX_ERROR_NUMBER_TOO_BIG = 161,
  G_REGEX_ERROR_MISSING_SUBPATTERN_NAME = 162,
  G_REGEX_ERROR_MISSING_DIGIT = 163,
  G_REGEX_ERROR_INVALID_DATA_CHARACTER = 164,
  G_REGEX_ERROR_EXTRA_SUBPATTERN_NAME = 165,
  G_REGEX_ERROR_BACKTRACKING_CONTROL_VERB_ARGUMENT_REQUIRED = 166,
  G_REGEX_ERROR_INVALID_CONTROL_CHAR = 168,
  G_REGEX_ERROR_MISSING_NAME = 169,
  G_REGEX_ERROR_NOT_SUPPORTED_IN_CLASS = 171,
  G_REGEX_ERROR_TOO_MANY_FORWARD_REFERENCES = 172,
  G_REGEX_ERROR_NAME_TOO_LONG = 175,
  G_REGEX_ERROR_CHARACTER_VALUE_TOO_LARGE = 176
} GRegexError;
typedef enum
{
  G_OPTION_ERROR_UNKNOWN_OPTION,
  G_OPTION_ERROR_BAD_VALUE,
  G_OPTION_ERROR_FAILED
} GOptionError;
typedef enum
{
  G_OPTION_ARG_NONE,
  G_OPTION_ARG_STRING,
  G_OPTION_ARG_INT,
  G_OPTION_ARG_CALLBACK,
  G_OPTION_ARG_FILENAME,
  G_OPTION_ARG_STRING_ARRAY,
  G_OPTION_ARG_FILENAME_ARRAY,
  G_OPTION_ARG_DOUBLE,
  G_OPTION_ARG_INT64
} GOptionArg;
typedef enum
{
  G_OPTION_FLAG_NONE            = 0,
  G_OPTION_FLAG_HIDDEN		= 1 << 0,
  G_OPTION_FLAG_IN_MAIN		= 1 << 1,
  G_OPTION_FLAG_REVERSE		= 1 << 2,
  G_OPTION_FLAG_NO_ARG		= 1 << 3,
  G_OPTION_FLAG_FILENAME	= 1 << 4,
  G_OPTION_FLAG_OPTIONAL_ARG    = 1 << 5,
  G_OPTION_FLAG_NOALIAS	        = 1 << 6
} GOptionFlags;
typedef enum
{
  G_IN_ORDER,
  G_PRE_ORDER,
  G_POST_ORDER,
  G_LEVEL_ORDER
} GTraverseType;
typedef enum
{
  G_TRAVERSE_LEAVES     = 1 << 0,
  G_TRAVERSE_NON_LEAVES = 1 << 1,
  G_TRAVERSE_ALL        = G_TRAVERSE_LEAVES | G_TRAVERSE_NON_LEAVES,
  G_TRAVERSE_MASK       = 0x03,
  G_TRAVERSE_LEAFS      = G_TRAVERSE_LEAVES,
  G_TRAVERSE_NON_LEAFS  = G_TRAVERSE_NON_LEAVES
} GTraverseFlags;
typedef enum
{
  G_LOG_WRITER_HANDLED = 1,
  G_LOG_WRITER_UNHANDLED = 0,
} GLogWriterOutput;
typedef enum
{
  /* log flags */
  G_LOG_FLAG_RECURSION          = 1 << 0,
  G_LOG_FLAG_FATAL              = 1 << 1,

  /* GLib log levels */
  G_LOG_LEVEL_ERROR             = 1 << 2,       /* always fatal */
  G_LOG_LEVEL_CRITICAL          = 1 << 3,
  G_LOG_LEVEL_WARNING           = 1 << 4,
  G_LOG_LEVEL_MESSAGE           = 1 << 5,
  G_LOG_LEVEL_INFO              = 1 << 6,
  G_LOG_LEVEL_DEBUG             = 1 << 7,

  G_LOG_LEVEL_MASK              = ~(G_LOG_FLAG_RECURSION | G_LOG_FLAG_FATAL)
} GLogLevelFlags;
typedef enum
{
  G_MARKUP_COLLECT_INVALID,
  G_MARKUP_COLLECT_STRING,
  G_MARKUP_COLLECT_STRDUP,
  G_MARKUP_COLLECT_BOOLEAN,
  G_MARKUP_COLLECT_TRISTATE,

  G_MARKUP_COLLECT_OPTIONAL = (1 << 16)
} GMarkupCollectType;
typedef enum
{
  G_MARKUP_DO_NOT_USE_THIS_UNSUPPORTED_FLAG = 1 << 0,
  G_MARKUP_TREAT_CDATA_AS_TEXT              = 1 << 1,
  G_MARKUP_PREFIX_ERROR_POSITION            = 1 << 2,
  G_MARKUP_IGNORE_QUALIFIED                 = 1 << 3
} GMarkupParseFlags;
typedef enum
{
  G_MARKUP_ERROR_BAD_UTF8,
  G_MARKUP_ERROR_EMPTY,
  G_MARKUP_ERROR_PARSE,
  /* The following are primarily intended for specific GMarkupParser
   * implementations to set.
   */
  G_MARKUP_ERROR_UNKNOWN_ELEMENT,
  G_MARKUP_ERROR_UNKNOWN_ATTRIBUTE,
  G_MARKUP_ERROR_INVALID_CONTENT,
  G_MARKUP_ERROR_MISSING_ATTRIBUTE
} GMarkupError;
typedef enum /*< flags >*/
{
  G_IO_IN	GLIB_SYSDEF_POLLIN,
  G_IO_OUT	GLIB_SYSDEF_POLLOUT,
  G_IO_PRI	GLIB_SYSDEF_POLLPRI,
  G_IO_ERR	GLIB_SYSDEF_POLLERR,
  G_IO_HUP	GLIB_SYSDEF_POLLHUP,
  G_IO_NVAL	GLIB_SYSDEF_POLLNVAL
} GIOCondition;
typedef enum
{
  G_KEY_FILE_NONE              = 0,
  G_KEY_FILE_KEEP_COMMENTS     = 1 << 0,
  G_KEY_FILE_KEEP_TRANSLATIONS = 1 << 1
} GKeyFileFlags;
typedef enum
{
  G_KEY_FILE_ERROR_UNKNOWN_ENCODING,
  G_KEY_FILE_ERROR_PARSE,
  G_KEY_FILE_ERROR_NOT_FOUND,
  G_KEY_FILE_ERROR_KEY_NOT_FOUND,
  G_KEY_FILE_ERROR_GROUP_NOT_FOUND,
  G_KEY_FILE_ERROR_INVALID_VALUE
} GKeyFileError;
typedef enum
{
  G_IO_FLAG_APPEND = 1 << 0,
  G_IO_FLAG_NONBLOCK = 1 << 1,
  G_IO_FLAG_IS_READABLE = 1 << 2,	/* Read only flag */
  G_IO_FLAG_IS_WRITABLE = 1 << 3,	/* Read only flag */
  G_IO_FLAG_IS_WRITEABLE = 1 << 3,      /* Misspelling in 2.29.10 and earlier */
  G_IO_FLAG_IS_SEEKABLE = 1 << 4,	/* Read only flag */
  G_IO_FLAG_MASK = (1 << 5) - 1,
  G_IO_FLAG_GET_MASK = G_IO_FLAG_MASK,
  G_IO_FLAG_SET_MASK = G_IO_FLAG_APPEND | G_IO_FLAG_NONBLOCK
} GIOFlags;
typedef enum
{
  G_SEEK_CUR,
  G_SEEK_SET,
  G_SEEK_END
} GSeekType;
typedef enum
{
  G_IO_STATUS_ERROR,
  G_IO_STATUS_NORMAL,
  G_IO_STATUS_EOF,
  G_IO_STATUS_AGAIN
} GIOStatus;
typedef enum
{
  /* Derived from errno */
  G_IO_CHANNEL_ERROR_FBIG,
  G_IO_CHANNEL_ERROR_INVAL,
  G_IO_CHANNEL_ERROR_IO,
  G_IO_CHANNEL_ERROR_ISDIR,
  G_IO_CHANNEL_ERROR_NOSPC,
  G_IO_CHANNEL_ERROR_NXIO,
  G_IO_CHANNEL_ERROR_OVERFLOW,
  G_IO_CHANNEL_ERROR_PIPE,
  /* Other */
  G_IO_CHANNEL_ERROR_FAILED
} GIOChannelError;
typedef enum
{
  G_IO_ERROR_NONE,
  G_IO_ERROR_AGAIN,
  G_IO_ERROR_INVAL,
  G_IO_ERROR_UNKNOWN
} GIOError;
typedef enum
{
  G_HOOK_FLAG_ACTIVE	    = 1 << 0,
  G_HOOK_FLAG_IN_CALL	    = 1 << 1,
  G_HOOK_FLAG_MASK	    = 0x0f
} GHookFlagMask;
typedef enum
{
  G_FILE_TEST_IS_REGULAR    = 1 << 0,
  G_FILE_TEST_IS_SYMLINK    = 1 << 1,
  G_FILE_TEST_IS_DIR        = 1 << 2,
  G_FILE_TEST_IS_EXECUTABLE = 1 << 3,
  G_FILE_TEST_EXISTS        = 1 << 4
} GFileTest;
typedef enum
{
  G_FILE_ERROR_EXIST,
  G_FILE_ERROR_ISDIR,
  G_FILE_ERROR_ACCES,
  G_FILE_ERROR_NAMETOOLONG,
  G_FILE_ERROR_NOENT,
  G_FILE_ERROR_NOTDIR,
  G_FILE_ERROR_NXIO,
  G_FILE_ERROR_NODEV,
  G_FILE_ERROR_ROFS,
  G_FILE_ERROR_TXTBSY,
  G_FILE_ERROR_FAULT,
  G_FILE_ERROR_LOOP,
  G_FILE_ERROR_NOSPC,
  G_FILE_ERROR_NOMEM,
  G_FILE_ERROR_MFILE,
  G_FILE_ERROR_NFILE,
  G_FILE_ERROR_BADF,
  G_FILE_ERROR_INVAL,
  G_FILE_ERROR_PIPE,
  G_FILE_ERROR_AGAIN,
  G_FILE_ERROR_INTR,
  G_FILE_ERROR_IO,
  G_FILE_ERROR_PERM,
  G_FILE_ERROR_NOSYS,
  G_FILE_ERROR_FAILED
} GFileError;
typedef enum
{
  G_DATE_BAD_MONTH = 0,
  G_DATE_JANUARY   = 1,
  G_DATE_FEBRUARY  = 2,
  G_DATE_MARCH     = 3,
  G_DATE_APRIL     = 4,
  G_DATE_MAY       = 5,
  G_DATE_JUNE      = 6,
  G_DATE_JULY      = 7,
  G_DATE_AUGUST    = 8,
  G_DATE_SEPTEMBER = 9,
  G_DATE_OCTOBER   = 10,
  G_DATE_NOVEMBER  = 11,
  G_DATE_DECEMBER  = 12
} GDateMonth;
typedef enum
{
  G_DATE_BAD_WEEKDAY  = 0,
  G_DATE_MONDAY       = 1,
  G_DATE_TUESDAY      = 2,
  G_DATE_WEDNESDAY    = 3,
  G_DATE_THURSDAY     = 4,
  G_DATE_FRIDAY       = 5,
  G_DATE_SATURDAY     = 6,
  G_DATE_SUNDAY       = 7
} GDateWeekday;
typedef enum
{
  G_DATE_DAY   = 0,
  G_DATE_MONTH = 1,
  G_DATE_YEAR  = 2
} GDateDMY;
typedef enum
{
  G_CONVERT_ERROR_NO_CONVERSION,
  G_CONVERT_ERROR_ILLEGAL_SEQUENCE,
  G_CONVERT_ERROR_FAILED,
  G_CONVERT_ERROR_PARTIAL_INPUT,
  G_CONVERT_ERROR_BAD_URI,
  G_CONVERT_ERROR_NOT_ABSOLUTE_PATH,
  G_CONVERT_ERROR_NO_MEMORY,
  G_CONVERT_ERROR_EMBEDDED_NUL
} GConvertError;
typedef enum {
  G_CHECKSUM_MD5,
  G_CHECKSUM_SHA1,
  G_CHECKSUM_SHA256,
  G_CHECKSUM_SHA512,
  G_CHECKSUM_SHA384
} GChecksumType;
typedef enum
{
  G_BOOKMARK_FILE_ERROR_INVALID_URI,
  G_BOOKMARK_FILE_ERROR_INVALID_VALUE,
  G_BOOKMARK_FILE_ERROR_APP_NOT_REGISTERED,
  G_BOOKMARK_FILE_ERROR_URI_NOT_FOUND,
  G_BOOKMARK_FILE_ERROR_READ,
  G_BOOKMARK_FILE_ERROR_UNKNOWN_ENCODING,
  G_BOOKMARK_FILE_ERROR_WRITE,
  G_BOOKMARK_FILE_ERROR_FILE_NOT_FOUND
} GBookmarkFileError;

typedef void (*GModuleUnload) (GModule	*module);
typedef const gchar * (*GModuleCheckInit) (GModule	*module);
typedef guint64 (*g_thread_gettime) (void);
typedef gint (*GCompletionStrncmpFunc) (const gchar *s1,
                                        const gchar *s2,
                                        gsize        n);
typedef gchar * (*GCompletionFunc) (gpointer);
typedef void (*GCacheDestroyFunc) (gpointer       value);
typedef gpointer (*GCacheDupFunc) (gpointer       value);
typedef gpointer (*GCacheNewFunc) (gpointer       key);
typedef void (*GVoidFunc) (void);
typedef const gchar * (*GTranslateFunc) (const gchar   *str,
						 gpointer       data);
typedef void (*GFreeFunc) (gpointer       data);
typedef void (*GHFunc) (gpointer       key,
                                                 gpointer       value,
                                                 gpointer       user_data);
typedef guint (*GHashFunc) (gconstpointer  key);
typedef void (*GFunc) (gpointer       data,
                                                 gpointer       user_data);
typedef void (*GDestroyNotify) (gpointer       data);
typedef gboolean (*GEqualFunc) (gconstpointer  a,
                                                 gconstpointer  b);
typedef gint (*GCompareDataFunc) (gconstpointer  a,
                                                 gconstpointer  b,
						 gpointer       user_data);
typedef gint (*GCompareFunc) (gconstpointer  a,
                                                 gconstpointer  b);
typedef gboolean (*GTraverseFunc) (gpointer  key,
                                   gpointer  value,
                                   gpointer  data);
typedef gpointer (*GThreadFunc) (gpointer data);
typedef gboolean (*GTestLogFatalFunc) (const gchar    *log_domain,
                                                 GLogLevelFlags  log_level,
                                                 const gchar    *message,
                                                 gpointer        user_data);
typedef void (*GTestFixtureFunc) (gpointer      fixture,
                                  gconstpointer user_data);
typedef void (*GTestDataFunc) (gconstpointer user_data);
typedef void (*GTestFunc) (void);
typedef void (*GSpawnChildSetupFunc) (gpointer user_data);
typedef gint (*GSequenceIterCompareFunc) (GSequenceIter *a,
                                           GSequenceIter *b,
                                           gpointer       data);
typedef void (*GScannerMsgFunc) (GScanner      *scanner,
						 gchar	       *message,
						 gboolean	error);
typedef gboolean (*GRegexEvalCallback) (const GMatchInfo *match_info,
						 GString          *result,
						 gpointer          user_data);
typedef gint (*GPollFunc) (GPollFD *ufds,
                                 guint    nfsd,
                                 gint     timeout_);
typedef void (*GOptionErrorFunc) (GOptionContext *context,
				  GOptionGroup   *group,
				  gpointer        data,
				  GError        **error);
typedef gboolean (*GOptionParseFunc) (GOptionContext *context,
				      GOptionGroup   *group,
				      gpointer	      data,
				      GError        **error);
typedef gboolean (*GOptionArgFunc) (const gchar    *option_name,
				    const gchar    *value,
				    gpointer        data,
				    GError        **error);
typedef gpointer (*GCopyFunc) (gconstpointer  src,
                                                 gpointer       data);
typedef void (*GNodeForeachFunc) (GNode	       *node,
						 gpointer	data);
typedef gboolean (*GNodeTraverseFunc) (GNode	       *node,
						 gpointer	data);
typedef void (*GPrintFunc) (const gchar    *string);
typedef GLogWriterOutput (*GLogWriterFunc) (GLogLevelFlags   log_level,
                                                const GLogField *fields,
                                                gsize            n_fields,
                                                gpointer         user_data);
typedef void (*GLogFunc) (const gchar   *log_domain,
                                                 GLogLevelFlags log_level,
                                                 const gchar   *message,
                                                 gpointer       user_data);
typedef void (*GClearHandleFunc) (guint handle_id);
typedef void (*GSourceDummyMarshal) (void);
typedef void (*GChildWatchFunc) (GPid     pid,
                                       gint     status,
                                       gpointer user_data);
typedef gboolean (*GSourceFunc) (gpointer user_data);
typedef gboolean (*GUnixFDSourceFunc) (gint         fd,
                                       GIOCondition condition,
                                       gpointer     user_data);
typedef gboolean (*GIOFunc) (GIOChannel   *source,
			     GIOCondition  condition,
			     gpointer      data);
typedef void (*GHookFinalizeFunc) (GHookList      *hook_list,
						 GHook          *hook);
typedef gboolean (*GHookCheckFunc) (gpointer	 data);
typedef void (*GHookFunc) (gpointer	 data);
typedef gboolean (*GHookCheckMarshaller) (GHook		*hook,
						 gpointer	 marshal_data);
typedef void (*GHookMarshaller) (GHook		*hook,
						 gpointer	 marshal_data);
typedef gboolean (*GHookFindFunc) (GHook		*hook,
						 gpointer	 data);
typedef gint (*GHookCompareFunc) (GHook		*new_hook,
						 GHook		*sibling);
typedef gboolean (*GHRFunc) (gpointer  key,
                               gpointer  value,
                               gpointer  user_data);
typedef gpointer (*GDuplicateFunc) (gpointer data, gpointer user_data);
typedef void (*GDataForeachFunc) (GQuark         key_id,
                                                 gpointer       data,
                                                 gpointer       user_data);

union _GDoubleIEEE754
{
  gdouble v_double;
  struct {
    guint sign : 1;
    guint biased_exponent : 11;
    guint mantissa_high : 20;
    guint mantissa_low : 32;
  } mpn;
};
union _GFloatIEEE754;
union _GDoubleIEEE754
{
  gdouble v_double;
  struct {
    guint mantissa_low : 32;
    guint mantissa_high : 20;
    guint biased_exponent : 11;
    guint sign : 1;
  } mpn;
};
union _GMutex
{
  /*< private >*/
  gpointer p;
  guint i[2];
};
union	_GTokenValue
{
  gpointer	v_symbol;
  gchar		*v_identifier;
  gulong	v_binary;
  gulong	v_octal;
  gulong	v_int;
  guint64       v_int64;
  gdouble	v_float;
  gulong	v_hex;
  gchar		*v_string;
  gchar		*v_comment;
  guchar	v_char;
  guint		v_error;
};


typedef unsigned long int pthread_t;
typedef union
{
  struct __pthread_mutex_s __data;
  /*char __size[__SIZEOF_PTHREAD_MUTEX_T];*/
  long int __align;
} pthread_mutex_t;

typedef struct
{
  GMutex *mutex;
#ifndef G_OS_WIN32
  /* only for ABI compatibility reasons */
  pthread_mutex_t unused;
#endif
} GStaticMutex;



struct _GStaticPrivate
{
  /*< private >*/
  guint index;
};
struct _GStaticRWLock
{
  /*< private >*/
  GStaticMutex mutex;
  GCond *read_cond;
  GCond *write_cond;
  guint read_counter;
  gboolean have_writer;
  guint want_to_read;
  guint want_to_write;
};
struct _GStaticRecMutex
{
  /*< private >*/
  GStaticMutex mutex;
  guint depth;

  /* ABI compat only */
  union {
#ifdef G_OS_WIN32
    void *owner;
#else
    pthread_t owner;
#endif
    gdouble dummy;
  } unused;
};
struct _GThreadFunctions
{
  GMutex*  (*mutex_new)           (void);
  void     (*mutex_lock)          (GMutex               *mutex);
  gboolean (*mutex_trylock)       (GMutex               *mutex);
  void     (*mutex_unlock)        (GMutex               *mutex);
  void     (*mutex_free)          (GMutex               *mutex);
  GCond*   (*cond_new)            (void);
  void     (*cond_signal)         (GCond                *cond);
  void     (*cond_broadcast)      (GCond                *cond);
  void     (*cond_wait)           (GCond                *cond,
                                   GMutex               *mutex);
  gboolean (*cond_timed_wait)     (GCond                *cond,
                                   GMutex               *mutex,
                                   GTimeVal             *end_time);
  void      (*cond_free)          (GCond                *cond);
  GPrivate* (*private_new)        (GDestroyNotify        destructor);
  gpointer  (*private_get)        (GPrivate             *private_key);
  void      (*private_set)        (GPrivate             *private_key,
                                   gpointer              data);
  void      (*thread_create)      (GThreadFunc           func,
                                   gpointer              data,
                                   gulong                stack_size,
                                   gboolean              joinable,
                                   gboolean              bound,
                                   GThreadPriority       priority,
                                   gpointer              thread,
                                   GError              **error);
  void      (*thread_yield)       (void);
  void      (*thread_join)        (gpointer              thread);
  void      (*thread_exit)        (void);
  void      (*thread_set_priority)(gpointer              thread,
                                   GThreadPriority       priority);
  void      (*thread_self)        (gpointer              thread);
  gboolean  (*thread_equal)       (gpointer              thread1,
                                   gpointer              thread2);
};
struct  _GThread
{
  /*< private >*/
  GThreadFunc func;
  gpointer data;
  gboolean joinable;
  GThreadPriority priority;
};

struct _GTuples
{
  guint len;
};
struct _GCompletion
{
  GList* items;
  GCompletionFunc func;
 
  gchar* prefix;
  GList* cache;
  GCompletionStrncmpFunc strncmp_func;
};



struct _GVariantDict {
  /*< private >*/
  union
  {
    struct {
      GVariant *asv;
      gsize partial_magic;
      gsize y[14];
    } s;
    gsize x[16];
  } u;
};
struct _GVariantBuilder {
  /*< private >*/
  union
  {
    struct {
      gsize partial_magic;
      const GVariantType *type;
      gsize y[14];
    } s;
    gsize x[16];
  } u;
};
struct _GVariantIter {
  /*< private >*/
  gsize x[16];
};
struct _GDebugKey
{
  const gchar *key;
  guint	       value;
};
struct _GTimeVal
{
  glong tv_sec;
  glong tv_usec;
};

struct _GTrashStack
{
  GTrashStack *next;
};


struct _GThreadPool
{
  GFunc func;
  gpointer user_data;
  gboolean exclusive;
};

struct _GOnce
{
  volatile GOnceStatus status;
  volatile gpointer retval;
};
struct _GPrivate
{
  /*< private >*/
  gpointer       p;
  GDestroyNotify notify;
  gpointer future[2];
};
struct _GRecMutex
{
  /*< private >*/
  gpointer p;
  guint i[2];
};
struct _GCond
{
  /*< private >*/
  gpointer p;
  guint i[2];
};
struct _GRWLock
{
  /*< private >*/
  gpointer p;
  guint i[2];
};
typedef struct {
  /*< private >*/
  GString     *data;
  GSList      *msgs;
} GTestLogBuffer;
typedef struct {
  GTestLogType  log_type;
  guint         n_strings;
  gchar       **strings; /* NULL terminated */
  guint         n_nums;
  long double  *nums;
} GTestLogMsg;
typedef struct {
  gboolean      test_initialized;
  gboolean      test_quick;     /* disable thorough tests */
  gboolean      test_perf;      /* run performance tests */
  gboolean      test_verbose;   /* extra info */
  gboolean      test_quiet;     /* reduce output */
  gboolean      test_undefined; /* run tests that are meant to assert */
} GTestConfig;

struct _GString
{
  gchar  *str;
  gsize len;
  gsize allocated_len;
};

struct _GWin32PrivateStat
{
  guint32 volume_serial;
  guint64 file_index;
  guint64 attributes;
  guint64 allocated_size;
  guint32 reparse_tag;

  guint32 st_dev;
  guint32 st_ino;
  guint16 st_mode;
  guint16 st_uid;
  guint16 st_gid;
  guint32 st_nlink;
  guint64 st_size;
  guint64 st_ctime;
  guint64 st_atime;
  guint64 st_mtime;
};
struct utimbuf;			/* Don't need the real definition of struct utimbuf when just*/
struct _GSList
{
  gpointer data;
  GSList *next;
};

struct	_GScanner
{
  /* unused fields */
  gpointer		user_data;
  guint			max_parse_errors;
  
  /* g_scanner_error() increments this field */
  guint			parse_errors;
  
  /* name of input stream, featured by the default message handler */
  const gchar		*input_name;
  
  /* quarked data */
  GData			*qdata;
  
  /* link into the scanner configuration */
  GScannerConfig	*config;
  
  /* fields filled in after g_scanner_get_next_token() */
  GTokenType		token;
  GTokenValue		value;
  guint			line;
  guint			position;
  
  /* fields filled in after g_scanner_peek_next_token() */
  GTokenType		next_token;
  GTokenValue		next_value;
  guint			next_line;
  guint			next_position;

  /*< private >*/
  /* to be considered private */
  GHashTable		*symbol_table;
  gint			input_fd;
  const gchar		*text;
  const gchar		*text_end;
  gchar			*buffer;
  guint			scope_id;

  /*< public >*/
  /* handler function for _warn and _error */
  GScannerMsgFunc	msg_handler;
};
struct	_GScannerConfig
{
  /* Character sets
   */
  gchar		*cset_skip_characters;		/* default: " \t\n" */
  gchar		*cset_identifier_first;
  gchar		*cset_identifier_nth;
  gchar		*cpair_comment_single;		/* default: "#\n" */
  
  /* Should symbol lookup work case sensitive?
   */
  guint		case_sensitive : 1;
  
  /* Boolean values to be adjusted "on the fly"
   * to configure scanning behaviour.
   */
  guint		skip_comment_multi : 1;		/* C like comment */
  guint		skip_comment_single : 1;	/* single line comment */
  guint		scan_comment_multi : 1;		/* scan multi line comments? */
  guint		scan_identifier : 1;
  guint		scan_identifier_1char : 1;
  guint		scan_identifier_NULL : 1;
  guint		scan_symbols : 1;
  guint		scan_binary : 1;
  guint		scan_octal : 1;
  guint		scan_float : 1;
  guint		scan_hex : 1;			/* '0x0ff0' */
  guint		scan_hex_dollar : 1;		/* '$0ff0' */
  guint		scan_string_sq : 1;		/* string: 'anything' */
  guint		scan_string_dq : 1;		/* string: "\\-escapes!\n" */
  guint		numbers_2_int : 1;		/* bin, octal, hex => int */
  guint		int_2_float : 1;		/* int => G_TOKEN_FLOAT? */
  guint		identifier_2_string : 1;
  guint		char_2_token : 1;		/* return G_TOKEN_CHAR? */
  guint		symbol_2_token : 1;
  guint		scope_0_fallback : 1;		/* try scope 0 on lookups? */
  guint		store_int64 : 1; 		/* use value.v_int64 rather than v_int */

  /*< private >*/
  guint		padding_dummy;
};



struct _GQueue
{
  GList *head;
  GList *tail;
  guint  length;
};
struct _GPollFD
{
#if defined (G_OS_WIN32) && GLIB_SIZEOF_VOID_P == 8
#endif
#else
  gint		fd;
#endif
  gushort 	events;
  gushort 	revents;
};



struct _GOptionEntry
{
  const gchar *long_name;
  gchar        short_name;
  gint         flags;

  GOptionArg   arg;
  gpointer     arg_data;
  
  const gchar *description;
  const gchar *arg_description;
};
struct _GNode
{
  gpointer data;
  GNode	  *next;
  GNode	  *prev;
  GNode	  *parent;
  GNode	  *children;
};
struct _GLogField
{
  const gchar *key;
  gconstpointer value;
  gssize length;
};
struct _GMemVTable {
  gpointer (*malloc)      (gsize    n_bytes);
  gpointer (*realloc)     (gpointer mem,
			   gsize    n_bytes);
  void     (*free)        (gpointer mem);
  /* optional; set to NULL if not used ! */
  gpointer (*calloc)      (gsize    n_blocks,
			   gsize    n_block_bytes);
  gpointer (*try_malloc)  (gsize    n_bytes);
  gpointer (*try_realloc) (gpointer mem,
			   gsize    n_bytes);
};

struct _GMarkupParser
{
  /* Called for open tags <foo bar="baz"> */
  void (*start_element)  (GMarkupParseContext *context,
                          const gchar         *element_name,
                          const gchar        **attribute_names,
                          const gchar        **attribute_values,
                          gpointer             user_data,
                          GError             **error);

  /* Called for close tags </foo> */
  void (*end_element)    (GMarkupParseContext *context,
                          const gchar         *element_name,
                          gpointer             user_data,
                          GError             **error);

  /* Called for character data */
  /* text is not nul-terminated */
  void (*text)           (GMarkupParseContext *context,
                          const gchar         *text,
                          gsize                text_len,
                          gpointer             user_data,
                          GError             **error);

  /* Called for strings that should be re-saved verbatim in this same
   * position, but are not otherwise interpretable.  At the moment
   * this includes comments and processing instructions.
   */
  /* text is not nul-terminated. */
  void (*passthrough)    (GMarkupParseContext *context,
                          const gchar         *passthrough_text,
                          gsize                text_len,
                          gpointer             user_data,
                          GError             **error);

  /* Called on error, including one set by other
   * methods in the vtable. The GError should not be freed.
   */
  void (*error)          (GMarkupParseContext *context,
                          GError              *error,
                          gpointer             user_data);
};




struct _GSourceFuncs
{
  gboolean (*prepare)  (GSource    *source,
                        gint       *timeout_);
  gboolean (*check)    (GSource    *source);
  gboolean (*dispatch) (GSource    *source,
                        GSourceFunc callback,
                        gpointer    user_data);
  void     (*finalize) (GSource    *source); /* Can be NULL */

  /*< private >*/
  /* For use by g_source_set_closure */
  GSourceFunc     closure_callback;        
  GSourceDummyMarshal closure_marshal; /* Really is of type GClosureMarshal */
};
struct _GSourceCallbackFuncs
{
  void (*ref)   (gpointer     cb_data);
  void (*unref) (gpointer     cb_data);
  void (*get)   (gpointer     cb_data,
                 GSource     *source, 
                 GSourceFunc *func,
                 gpointer    *data);
};
struct _GSource
{
  /*< private >*/
  gpointer callback_data;
  GSourceCallbackFuncs *callback_funcs;

  const GSourceFuncs *source_funcs;
  guint ref_count;

  GMainContext *context;

  gint priority;
  guint flags;
  guint source_id;

  GSList *poll_fds;
  
  GSource *prev;
  GSource *next;

  char    *name;

  GSourcePrivate *priv;
};
struct _GList
{
  gpointer data;
  GList *next;
  GList *prev;
};

struct _GIOFuncs
{
  GIOStatus (*io_read)           (GIOChannel   *channel, 
			          gchar        *buf, 
				  gsize         count,
				  gsize        *bytes_read,
				  GError      **err);
  GIOStatus (*io_write)          (GIOChannel   *channel, 
				  const gchar  *buf, 
				  gsize         count,
				  gsize        *bytes_written,
				  GError      **err);
  GIOStatus (*io_seek)           (GIOChannel   *channel, 
				  gint64        offset, 
				  GSeekType     type,
				  GError      **err);
  GIOStatus  (*io_close)         (GIOChannel   *channel,
				  GError      **err);
  GSource*   (*io_create_watch)  (GIOChannel   *channel,
				  GIOCondition  condition);
  void       (*io_free)          (GIOChannel   *channel);
  GIOStatus  (*io_set_flags)     (GIOChannel   *channel,
                                  GIOFlags      flags,
				  GError      **err);
  GIOFlags   (*io_get_flags)     (GIOChannel   *channel);
};
struct _GIOChannel
{
  /*< private >*/
  gint ref_count;
  GIOFuncs *funcs;

  gchar *encoding;
  GIConv read_cd;
  GIConv write_cd;
  gchar *line_term;		/* String which indicates the end of a line of text */
  guint line_term_len;		/* So we can have null in the line term */

  gsize buf_size;
  GString *read_buf;		/* Raw data from the channel */
  GString *encoded_read_buf;    /* Channel data converted to UTF-8 */
  GString *write_buf;		/* Data ready to be written to the file */
  gchar partial_write_buf[6];	/* UTF-8 partial characters, null terminated */

  /* Group the flags together, immediately after partial_write_buf, to save memory */

  guint use_buffer     : 1;	/* The encoding uses the buffers */
  guint do_encode      : 1;	/* The encoding uses the GIConv coverters */
  guint close_on_unref : 1;	/* Close the channel on final unref */
  guint is_readable    : 1;	/* Cached GIOFlag */
  guint is_writeable   : 1;	/* ditto */
  guint is_seekable    : 1;	/* ditto */

  gpointer reserved1;	
  gpointer reserved2;	
};
struct _GHook
{
  gpointer	 data;
  GHook		*next;
  GHook		*prev;
  guint		 ref_count;
  gulong	 hook_id;
  guint		 flags;
  gpointer	 func;
  GDestroyNotify destroy;
};
struct _GHookList
{
  gulong	    seq_id;
  guint		    hook_size : 16;
  guint		    is_setup : 1;
  GHook		   *hooks;
  gpointer	    dummy3;
  GHookFinalizeFunc finalize_hook;
  gpointer	    dummy[2];
};


struct _GHashTableIter
{
  /*< private >*/
  gpointer      dummy1;
  gpointer      dummy2;
  gpointer      dummy3;
  int           dummy4;
  gboolean      dummy5;
  gpointer      dummy6;
};
struct _GError
{
  GQuark       domain;
  gint         code;
  gchar       *message;
};


struct _GDate
{
  guint julian_days : 32; /* julian days representation - we use a
                           *  bitfield hoping that 64 bit platforms
                           *  will pack this whole struct in one big
                           *  int
                           */

  guint julian : 1;    /* julian is valid */
  guint dmy    : 1;    /* dmy is valid */

  /* DMY representation */
  guint day    : 6;
  guint month  : 4;
  guint year   : 16;
};





struct _GPtrArray
{
  gpointer *pdata;
  guint	    len;
};
struct _GByteArray
{
  guint8 *data;
  guint	  len;
};
struct _GArray
{
  gchar *data;
  guint len;
};

