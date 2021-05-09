typedef struct _GHashTable GHashTable;
typedef unsigned int    guint;
typedef int    gint;
typedef int    gsize;
typedef char   gchar;
typedef gint   gboolean;
typedef const void *gconstpointer;
typedef guint           (*GHashFunc)            (gconstpointer  key);
typedef gboolean        (*GEqualFunc)           (gconstpointer  a,
                                                 gconstpointer  b);
typedef struct _GKeyFile GKeyFile;

