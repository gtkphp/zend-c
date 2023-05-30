typedef enum
{
  G_IO_STATUS_ERROR,
  G_IO_STATUS_NORMAL,
  G_IO_STATUS_EOF,
  G_IO_STATUS_AGAIN
} GIOStatus;
typedef struct _GIOChannel	GIOChannel;
typedef char    gchar;
typedef unsigned long gsize;
typedef struct _GError GError;
