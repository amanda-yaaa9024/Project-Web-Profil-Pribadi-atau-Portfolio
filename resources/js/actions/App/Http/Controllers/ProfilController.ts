import { queryParams, type RouteQueryOptions, type RouteDefinition, type RouteFormDefinition } from './../../../../wayfinder'
/**
* @see \App\Http\Controllers\ProfilController::index
 * @see app/Http/Controllers/ProfilController.php:10
 * @route '/profil'
 */
export const index = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})

index.definition = {
    methods: ["get","head"],
    url: '/profil',
} satisfies RouteDefinition<["get","head"]>

/**
* @see \App\Http\Controllers\ProfilController::index
 * @see app/Http/Controllers/ProfilController.php:10
 * @route '/profil'
 */
index.url = (options?: RouteQueryOptions) => {
    return index.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProfilController::index
 * @see app/Http/Controllers/ProfilController.php:10
 * @route '/profil'
 */
index.get = (options?: RouteQueryOptions): RouteDefinition<'get'> => ({
    url: index.url(options),
    method: 'get',
})
/**
* @see \App\Http\Controllers\ProfilController::index
 * @see app/Http/Controllers/ProfilController.php:10
 * @route '/profil'
 */
index.head = (options?: RouteQueryOptions): RouteDefinition<'head'> => ({
    url: index.url(options),
    method: 'head',
})

    /**
* @see \App\Http\Controllers\ProfilController::index
 * @see app/Http/Controllers/ProfilController.php:10
 * @route '/profil'
 */
    const indexForm = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
        action: index.url(options),
        method: 'get',
    })

            /**
* @see \App\Http\Controllers\ProfilController::index
 * @see app/Http/Controllers/ProfilController.php:10
 * @route '/profil'
 */
        indexForm.get = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: index.url(options),
            method: 'get',
        })
            /**
* @see \App\Http\Controllers\ProfilController::index
 * @see app/Http/Controllers/ProfilController.php:10
 * @route '/profil'
 */
        indexForm.head = (options?: RouteQueryOptions): RouteFormDefinition<'get'> => ({
            action: index.url({
                        [options?.mergeQuery ? 'mergeQuery' : 'query']: {
                            _method: 'HEAD',
                            ...(options?.query ?? options?.mergeQuery ?? {}),
                        }
                    }),
            method: 'get',
        })
    
    index.form = indexForm
/**
* @see \App\Http\Controllers\ProfilController::sendContact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
export const sendContact = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: sendContact.url(options),
    method: 'post',
})

sendContact.definition = {
    methods: ["post"],
    url: '/send-contact',
} satisfies RouteDefinition<["post"]>

/**
* @see \App\Http\Controllers\ProfilController::sendContact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
sendContact.url = (options?: RouteQueryOptions) => {
    return sendContact.definition.url + queryParams(options)
}

/**
* @see \App\Http\Controllers\ProfilController::sendContact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
sendContact.post = (options?: RouteQueryOptions): RouteDefinition<'post'> => ({
    url: sendContact.url(options),
    method: 'post',
})

    /**
* @see \App\Http\Controllers\ProfilController::sendContact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
    const sendContactForm = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
        action: sendContact.url(options),
        method: 'post',
    })

            /**
* @see \App\Http\Controllers\ProfilController::sendContact
 * @see app/Http/Controllers/ProfilController.php:37
 * @route '/send-contact'
 */
        sendContactForm.post = (options?: RouteQueryOptions): RouteFormDefinition<'post'> => ({
            action: sendContact.url(options),
            method: 'post',
        })
    
    sendContact.form = sendContactForm
const ProfilController = { index, sendContact }

export default ProfilController