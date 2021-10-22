/**
 * Get cookie from request.
 *
 * @param  {Object} req
 * @param  {String} key
 * @return {String|undefined}
 */
export function cookieFromRequest (req, key) {
  if (!req.headers.cookie) {
    return
  }

  const cookie = req.headers.cookie.split(';').find(
    c => c.trim().startsWith(`${key}=`)
  )

  if (cookie) {
    return cookie.split('=')[1]
  }
}

/**
 * https://router.vuejs.org/en/advanced/scroll-behavior.html
 */
export function scrollBehavior (to, from, savedPosition) {
  return { x: 0, y: 0 }
}

export function isObject (val) {
  return typeof val === 'boolean'
}

export function isBoolean (val) {
  return typeof val === 'boolean'
}

export function isString (val) {
  return typeof val === 'string'
}

export function isNull (val) {
  return val === null || val === undefined
}
