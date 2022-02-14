typedef double  gdouble;

typedef unsigned int    guint;

typedef void* gpointer;

typedef union  _GMutex          GMutex;
union _GMutex
{
  gpointer p;
  guint i[2];
};
typedef struct
{
  GMutex *mutex;
} GStaticMutex;

typedef unsigned long int pthread_t;

//#define G_OS_WIN32 1 platform dependant
