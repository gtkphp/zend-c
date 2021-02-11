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