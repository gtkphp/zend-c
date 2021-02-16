
typedef char   gchar;
typedef short  gshort;
typedef long   glong;
typedef int    gint;
typedef gint   gboolean;
typedef unsigned char   guchar;
typedef unsigned short  gushort;
typedef unsigned long   gulong;
typedef unsigned int    guint;
typedef float   gfloat;
typedef double  gdouble;

typedef signed char gint8;
typedef unsigned char guint8;
typedef signed short gint16;
typedef unsigned short guint16;
typedef signed int gint32;
typedef unsigned int guint32;
typedef signed long gint64;
typedef unsigned long guint64;

typedef void* gpointer;
typedef const void *gconstpointer;




#define GLIB_SYSDEF_POLLIN =1
#define GLIB_SYSDEF_POLLOUT =4
#define GLIB_SYSDEF_POLLPRI =2
#define GLIB_SYSDEF_POLLHUP =16
#define GLIB_SYSDEF_POLLERR =8
#define GLIB_SYSDEF_POLLNVAL =32

typedef struct _GHook GHook;
typedef struct _GHookList GHookList;
typedef struct _GIOFuncs GIOFuncs;
typedef struct _GList GList;
typedef struct _GSourceCallbackFuncs GSourceCallbackFuncs;
typedef struct _GSource GSource;
/*typedef struct _GSourcePrivate          GSourcePrivate;*/
typedef struct _GNode GNode;
/*typedef struct _GData GData;*/
typedef struct _GSList GSList;
typedef struct _GString GString;
typedef struct _GError GError;
typedef struct _GScannerConfig	GScannerConfig;

typedef void            (*GDestroyNotify)       (gpointer       data);
typedef void            (*GFunc)                (gpointer       data,
                                                 gpointer       user_data);

typedef struct _GTrashStack GTrashStack;
/*typedef struct _GVariant        GVariant;*/
typedef gpointer (*GThreadFunc) (gpointer data);
typedef enum _GThreadPriority GThreadPriority;
typedef gchar*          (*GCompletionFunc)      (gpointer);
typedef gboolean (*GSourceFunc)       (gpointer user_data);
typedef void		(*GHookFinalizeFunc)	(GHookList      *hook_list,
						 GHook          *hook);


typedef enum _GIOStatus GIOStatus;
typedef struct _GIOChannel	GIOChannel;
typedef enum _GSeekType GSeekType;
typedef enum _GIOCondition GIOCondition;
typedef enum _GIOFlags GIOFlags;
typedef struct _GScanner	GScanner;

typedef gint (*GCompletionStrncmpFunc) (const gchar *s1,
                                        const gchar *s2,
                                        gsize        n);

typedef void (*GSourceDummyMarshal) (void);
typedef union  _GTokenValue     GTokenValue;
/*typedef struct _GHashTable  GHashTable;*/

typedef void		(*GScannerMsgFunc)	(GScanner      *scanner,
						 gchar	       *message,
						 gboolean	error);

/*typedef struct _GVariantType GVariantType;*/
typedef struct _GSourceFuncs            GSourceFuncs;
/*typedef struct _GMainContext            GMainContext;*/


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
typedef struct _GCond           GCond;
typedef unsigned long int pthread_t;
typedef struct _GTimeVal                GTimeVal;
typedef struct _GPrivate        GPrivate;


